$('#form-signup_v1 [data-toggle="popover"]').popover({trigger: 'focus', placement: 'left'});
 
$('#form-signup_v1').validate({
    submit: {
        settings: {
            inputContainer: '.field',
            errorListClass: 'ui red pointing below label'
        },
        callback: {
            onBeforeSubmit: function (node) {
 
                myBeforeSubmitFunction(':D', ':)', node);
 
            },
            onSubmit: function (node, formData) {
 
                console.log('#' + node.id + ' has a submit override.');
                console.log(formData);
 
                //node[0].submit();
 
            }
        }
    }
});
 
function myBeforeSubmitFunction(a, b, node) {
 
    console.log(a, b);
 
    node.find('input:not([type="submit"]), select, textarea').attr('readonly', 'true');
    node.append('<div class="ui active loader"></div>');
 
}