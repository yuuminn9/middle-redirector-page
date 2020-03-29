# WHAT IS THIS?
As a relay page  which can escape from URL redirect sniffer.
And with full page fancy animations🤪.

### EXAMPLE
https://yourdomain.com/?url=[url]

### MORE
The default redirect timeout is 5000ms, change it from the following part as you wish.
```
// line 81
window.setTimeout(function(){
  window.location.href = "//" + url;
}, 5000);
```
