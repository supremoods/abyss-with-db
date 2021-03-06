$("#searchArt").keyup(function (event) {
    if (event.keyCode == 13 && event.shiftKey) {
        var content = this.value;
        var caret = getCaret(this);
        this.value =
            content.substring(0, caret) +
            "\n" +
            content.substring(carent, content.length - 1);
        event.stopPropagation();
    } else if (event.keyCode == 13) {
        if ($.trim($("input#searchArt").val())) {
            var filter = $("input#searchArt").val();
            if (filter.charAt(0)=="@"){
                window.location.href =  'users.php?username='+filter.substring(1);
            }else{
                window.location.href = 'search.php?searchFilter='+ filter;
            }
            
        }
 
    }
});

function getCaret(el) {
    if (el.selectionStart) {
        return el.selectionStart;
    } else if (document.selection) {
        el.focus();

        var r = document.selection.createRange();
        if (r == null) {
            return 0;
        }

        var re = el.createTextRange(),
            rc = re.duplicate();
        re.moveToBookmark(r.getBookmark());
        rc.setEndPoint("EndToStart", re);

        return rc.text.length;
    }
    return 0;
}
