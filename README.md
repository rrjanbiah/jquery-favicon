# jquery-favicon
jQuery plugin for adding favicons next to the links. That is, to automate:

```
a[href ^="http://jquery.com"] {
   background: url(http://jquery.com/favicon.ico) center right no-repeat;
   padding-right: 16px;
}
```

## Usage

* `$('a').favicon();` - all links
* `$('a[@href^="http"]').favicon();` - all external links
* `$('a').favicon({paddingRight: '32px'});` - all links with custom `paddingRight`

