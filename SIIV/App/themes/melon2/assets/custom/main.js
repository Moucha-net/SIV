var tnotyinfo = 3000;
var tnotyerror = 5000;
var tnotyok = 2000;
var tredirect = 500;

function notyOK(text) {

    var n = noty({
        text        : text,
        type        : 'success',
        layout      : 'center',
        theme       : 'customSTATTheme',
        maxVisible  : 5,
        timeout     : tnotyok
    });
}

function notyError(text) {

    var n = noty({
        text        : text,
        type        : 'error',
        layout      : 'center',
        theme       : 'customSTATTheme',
        maxVisible  : 5,
        timeout     : tnotyerror
    });
}

function notyInfo(text) {

    var n = noty({
        text        : text,
        type        : 'information',
        layout      : 'center',
        theme       : 'customSTATTheme',
        maxVisible  : 5,
        timeout     : tnotyinfo
    });
}

function notyAlert(text,okFunction,cancelFunction)
{

  var n = noty({
        text        : text,
        type        : 'alert',
        modal       : true,
        layout      : 'center',
        theme       : 'customSTATTheme',
        buttons     : [
            {addClass: 'btn btn-primary', text: 'Ok', onClick: function ($noty) {
                    /*$noty.close();
                    noty({dismissQueue: true, force: true, layout: layout, theme: 'defaultTheme', text: 'You clicked "Ok" button', type: 'success'});*/
                    okFunction();
                }
            },
            {addClass: 'btn btn-danger', text: 'Cancel', onClick: function ($noty) {
                    /*$noty.close();
                    noty({dismissQueue: true, force: true, layout: layout, theme: 'defaultTheme', text: 'You clicked "Cancel" button', type: 'error'});*/
                    cancelFunction();
                }
            }
        ],
      }); 
}