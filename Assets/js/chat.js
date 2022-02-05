$("#messageContent").keyup(function (event) {
    if (event.keyCode == 13 && event.shiftKey) {
      var content = this.value;
      var caret = getCaret(this);
      this.value =
        content.substring(0, caret) +
        "\n" +
        content.substring(carent, content.length - 1);
      event.stopPropagation();
    } else if (event.keyCode == 13) {
      if ($.trim($("textarea#messageContent").val())) {
        const chat_convo = document.querySelector('#chat_convo');
        var userID = chat_convo.dataset.id;
          var message = $("textarea#messageContent").val();
          $(".space").load("./phpFunc/sendMessage.php", {
            outgoing_message: message,
            userID: userID,
          });
      }
      $("textarea#messageContent").val("");
      scrollToBottom();
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

$("#sendBtn").click(function () {
    var chat = $("textarea#messageContent").val();
    $("textarea#messageContent").val("");

});

chatBox = document.querySelector(".chat_convo");

chatBox.onmouseenter = ()=>{
  chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
  chatBox.classList.remove("active");
}

function loadChat() {
    const chat_convo = document.querySelector('#chat_convo');
    var userID = chat_convo.dataset.id;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("chat_convo").innerHTML = this.responseText;
            if(!chatBox.classList.contains("active")){
              scrollToBottom();
            }
        }
    }
    xhr.open("POST", "./phpFunc/loadMessage.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(`userID=${userID}`);
}

setInterval(function(){
    loadChat();
},100);
window.onload = loadChat;



function scrollToBottom(){
  chatBox.scrollTop = chatBox.scrollHeight;
}

