
        // select drop down 
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, options);
        });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
});


document.addEventListener('DOMContentLoaded', function() {
                          var elems = document.querySelectorAll('.collapsible');
                          var instances = M.Collapsible.init(elems, options);
                          });


        //email validation
        $(document).ready(function() {

            var regex = new RegExp(
                '^(([^<>()[\\]\\\\.,;:\\s@\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\"]+)*)|' +
                '(\\".+\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])' +
                '|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$'
                );

            $('.email input').on('keyup', function(e) {
                $(this).parent().toggleClass('success', regex.test($(this).val()));
            });

    // file BaseInputModule.input
    // Also see: https://www.quirksmode.org/dom/inputfile.html

    var inputs = document.querySelectorAll('.file-input')

    for (var i = 0, len = inputs.length; i < len; i++) {
      customInput(inputs[i])
  }

  function customInput (el) {
      const fileInput = el.querySelector('[type="file"]')
      const label = el.querySelector('[data-js-label]')

      fileInput.onchange =
      fileInput.onmouseout = function () {
        if (!fileInput.value) return

            var value = fileInput.value.replace(/^.*[\\\/]/, '')
        el.className += ' -chosen'
        label.innerText = value
    }
}

});

        function resetbackground(){
        document.body.style.backgroundColor = "#FAFAFC"; // gray
}



// sharing

// this is the complete list of currently supported params you can pass to the plugin (all optional)
var options = {
message: 'share this', // not supported on some apps (Facebook, Instagram)
subject: 'the subject', // fi. for email
files: ['', ''], // an array of filenames either locally or remotely
url: 'https://www.website.com/foo/#bar?a=b',
chooserTitle: 'Pick an app' // Android only, you can override the default share sheet title,
appPackageName: 'com.apple.social.facebook' // Android only, you can provide id of the App you want to share with
};

var onSuccess = function(result) {
    console.log("Share completed? " + result.completed); // On Android apps mostly return false even while it's true
    console.log("Shared to app: " + result.app); // On Android result.app since plugin version 5.4.0 this is no longer empty. On iOS it's empty when sharing is cancelled (result.completed=false)
};

var onError = function(msg) {
    console.log("Sharing failed with message: " + msg);
};

window.plugins.socialsharing.shareWithOptions(options, onSuccess, onError);
