/**
 * Created by Роман on 17.06.14.
 */
$(document).ready(function() {
    $("div.panel-group>div").click(function(e) {
        e.preventDefault();
       // $(this).siblings('a.active').removeClass("active");
       // $(this).addClass("active");
        var index = $(this).index();
        $("div.my-tab>div.my-tab-content").removeClass("active");
        $("div.my-tab>div.my-tab-content").eq(index).addClass("active");
    });
});