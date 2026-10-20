import re
from html.parser import HTMLParser

VOID = {'meta','link','br','img','hr','input','area','base','col','embed','source','track','wbr'}

class Checker(HTMLParser):
    def __init__(self):
        super().__init__(convert_charrefs=True)
        self.stack = []
        self.errors = []
        self.h1_count = 0
    def handle_starttag(self, tag, attrs):
        if tag not in VOID:
            self.stack.append(tag)
        if tag == 'h1':
            self.h1_count += 1
    def handle_endtag(self, tag):
        if tag in VOID:
            return
        if not self.stack:
            self.errors.append(f'unexpected </{tag}>'); return
        if self.stack[-1] == tag:
            self.stack.pop()
        elif tag in self.stack:
            while self.stack and self.stack[-1] != tag:
                self.errors.append(f'unclosed <{self.stack.pop()}> before </{tag}>')
            self.stack.pop()
        else:
            self.errors.append(f'stray </{tag}>')

files = [
    "/Users/rosey./goldenticketrealty-wp/blog-posts/blog-2026-10-21-cost-to-sell-house-melbourne.html",
    "/Users/rosey./goldenticketrealty-wp/blog-posts/blog-2026-11-04-cash-buyer-vs-agent-melbourne.html",
    "/Users/rosey./goldenticketrealty-wp/blog-posts/blog-2026-11-18-cash-sale-closing-timeline-melbourne.html",
    "/Users/rosey./goldenticketrealty-wp/blog-posts/blog-2026-12-02-selling-house-as-is-melbourne.html",
    "/Users/rosey./goldenticketrealty-wp/blog-posts/blog-2026-12-16-brevard-market-update-melbourne.html",
    "/Users/rosey./goldenticketrealty-wp/blog-posts/blog-2026-12-30-questions-to-ask-cash-home-buyer.html",
]

ok = True
for f in files:
    html = open(f).read()
    c = Checker(); c.feed(html); c.close()
    if c.stack:
        c.errors.append('unclosed: ' + ','.join(c.stack))
    body = re.search(r'<article>(.*)</article>', html, re.S).group(1)
    body = re.sub(r'<[^>]+>', ' ', body)
    words = len(body.split())
    phone = '321-294-2081' in html and 'tel:3212942081' in html
    placeholders = bool(re.search(r'(TODO|PLACEHOLDER|Lorem ipsum)', html))
    ext = bool(re.search(r'href="https?://(?!goldenticketrealty\.com|tel:)', html))
    status = 'PASS' if not c.errors and c.h1_count == 1 and 1400 <= words <= 1800 and phone and not placeholders and not ext else 'FAIL'
    if status == 'FAIL': ok = False
    print(f'{status}  h1={c.h1_count}  words={words}  phone={phone}  ext={ext}  {f.split("/")[-1]}')
    for e in c.errors: print('   ERROR:', e)
print('ALL PASS' if ok else 'SOME FAILED')
