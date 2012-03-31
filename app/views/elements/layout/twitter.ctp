<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 5,
  interval: 6000,
  width: 160,
  height: 300,
  theme: {
    shell: {
      background: '#6B716E',
      color: '#ffffff'
    },
    tweets: {
      background: '#F8F8F8',
      color: '#666666',
      links: '#599100'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('celuworld').start();
</script>