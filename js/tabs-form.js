/**
 * Main js file
 */
(function($) {
    $(function() {
        //tabs
        $("div.panel-group>div").click(function(e) {
            var tabs = $("div.my-tab>div.my-tab-content"),
                index = $(this).index();
            e.preventDefault();
            tabs.removeClass("active").eq(index).addClass("active");
        }); 
        //other code
        $("#test").click(function () {
            $("#tab1").load('tabs.php #tab1', function () {
            });
        });
    });
})(jQuery);
