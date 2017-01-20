$(function(){
  $("form[name='form_addTasks']").validate({

    rules: {
      title:"required",
      subject:"required",
      date:"required",
      points:"required"
  },
    messages: {
      title: "Please enter a title",
      subject: "Please enter a subject",
      date: "Please enter your a date",
      points: "Please enter points"
    },
    submitHandler: function(form){
      form.submit();
    }
  });
});
