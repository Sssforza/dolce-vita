function validateEmail(input) {
    const re =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(input.value);
}
function maskPhone() {
    $('.tel').mask('+7 (Z00) 000-00-00', {
        'translation': {
            Z: {pattern: /[0-69-9]/},
        }
    });
}
function validatePhone(input) {
    if (input.value.length < 18) {
        input.parentNode.classList.add('error');
        return false;
    } else {
        input.parentNode.classList.remove('error');
        return true;
    }
}
function removeError(errors) {
    for (var i = 0; i < errors.length; i++) {
        errors[i].classList.remove('error');
    }
}
function checkFields(fields) {
    for (var i = 0; i < fields.length; i++) {
        if (!fields[i].value) {
            fields[i].parentNode.classList.add('error');
        }
    }
}
var validTotal = function (envelope) {
    envelope.forEach((item) => {
        if(item.classList.contains('error')) {
            return false;
        } else {
            return true;
        }
    });
}

// form in the main page
export function signConsultation () {
    if(document.querySelector('.signConsultation_js')) {
        maskPhone();
        var form = document.querySelector('.signConsultation_js');
        var input = form.querySelector('.tel');
        var fields = form.querySelectorAll('.fileds_js');
        var envelope = form.querySelectorAll('.envelopeInput');
        var valid

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            var errors = form.querySelectorAll('.error');
            removeError(errors);
            checkFields(fields);
            validatePhone(input);
            // validTotal(envelope);
            // if (validTotal(envelope)) {
            //     console.log('fetch')
            // } else {
            //     console.log('no fetch')
            // }
            envelope.forEach((item) => {
                if(item.classList.contains('error')) {
                    valid=false
                    //console.log('no fetch')
                } else {
                    valid=true
                    //console.log('fetch')
                }
            });
            console.log(valid)
        })
    }
}