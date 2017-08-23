// Displays which tab is active
$(".menu a").filter(function () {
  return this.href == location.href.replace(/#.*/, "");
}).addClass("active");
