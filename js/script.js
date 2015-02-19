$(function(){
    var firstPress = true;
    $("#catalog-filter .item.cb .jq-checkbox").bind("click", function(e){
        var rootEl = $(this).closest(".item.cb");
        if(rootEl.find(".jq-checkbox.checked").size()){
            rootEl.addClass("selected");
            //rootEl.find(".clear").show();
        }else{
            rootEl.removeClass("selected");
            $(".searcher .result").show();
            firstPress = true;
            //rootEl.find(".clear").hide();
        };
    });
    $("#catalog-filter .item.cb .clear").bind("click", function(e){
        e.preventDefault();
        $(this).closest(".item.cb").find(".jq-checkbox.checked").click();
    });
    $("#catalog-filter .item .btn-cb-show").add("#catalog-filter .item .btn-cb-hide").click(function(e){
        e.preventDefault();
        var rootEl = $(this).closest(".item.cb");
        rootEl.toggleClass("show-all");
    });


        $("#ch1-styler.jq-checkbox").on("click", function(e){           
            var rootEl = $(this).closest(".item.cb");
            if(firstPress){
                if(rootEl.find("#ch1-styler.jq-checkbox.checked").size()){
                    $(".searcher .result").hide();
                    $(".searcher .result.inProducts").show();
                    firstPress = false;
                }else {
                    // $(".searcher .result.inProducts").hide();                    
                }
            }else {
                if(rootEl.find("#ch1-styler.jq-checkbox.checked").size()) {$(".searcher .result.inProducts").show();}else{$(".searcher .result.inProducts").hide();}
            }
        });

        $("#ch2-styler.jq-checkbox").on("click", function(e){
            var rootEl = $(this).closest(".item.cb");
            if(firstPress){
                if(rootEl.find("#ch2-styler.jq-checkbox.checked").size()){
                  $(".searcher .result").hide();
                  $(".searcher .result.inArticles").show();
                  firstPress = false;
                }else {
                    // $(".searcher .result.inArticles").hide();                    
                }
            }else {
                if(rootEl.find("#ch2-styler.jq-checkbox.checked").size()) {$(".searcher .result.inArticles").show();}else{$(".searcher .result.inArticles").hide();}
            }
        });

        $("a.filter-tag").on("click", function(e){
            e.preventDefault();
            var dataTag = $(this).attr("data-tag");
            $(".searcher .result").hide();
            $(".searcher .result."+dataTag).show();
        });



})
function jsSliderOpt(){
    return this.init.apply( this, arguments );
}

jsSliderOpt.prototype.init = function( node, settings ){
    this.settings = settings;
    //this.settings = $.extend(true, {}, OPT.settings, settings ? settings : {});

    this.rootNode = $(node).closest(".item.slider");
    this.sliderNode = $( node );
    this.clearNode = $( this.settings.clear );
    this.input1Node = $( this.settings.input1).attr("placeholder", this.settings.min);
    this.input2Node = $( this.settings.input2).attr("placeholder", this.settings.max);
    this.lLeftNode = this.clearNode.parent(".item").find('.lable-left').html(this.settings.min);
    this.lRightNode = this.clearNode.parent(".item").find('.lable-right').html(this.settings.max);

    console.log(this);
    this.create();
};


jsSliderOpt.prototype.create = function() {
    var _t = this;
    this.sliderNode = $(this.sliderNode).slider({
        range: true,
        min: this.settings.min,
        max: this.settings.max,
        values: [ this.settings.min, this.settings.max ],
        slide: function( event, ui ) {
            _t.input1Node.val(ui.values[ 0 ]);
            _t.input2Node.val(ui.values[ 1 ]);
            _t.rootNode.addClass("selected");
            _t.clearNode.show();
        }
    });
    this.clearNode.bind("click", function(e){
        _t.input1Node.val("");
        _t.input2Node.val("");
        _t.sliderNode.slider( "option", "values", [ _t.settings.min, _t.settings.max ] );
        _t.rootNode.removeClass("selected");
        _t.clearNode.hide();
    });

    this.input1Node.bind("change", function(e){
        var minVal = _t.input1Node.val();
        var maxVal = _t.input2Node.val();

        if(maxVal == "") maxVal = _t.settings.min;
        if(minVal == "") minVal = _t.settings.max;

        _t.sliderNode.slider( "option", "values", [ minVal, maxVal ] );
    });

};