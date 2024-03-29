/*Criar nova tarefa*/
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

/*Criar novo user*/
$(function(){
  $("form[name='criar_novo_user']").validate({

    rules: {
      username:"required",
      email:{
      required: true,
      email: true },
      pass:"required",
      reppass:"required"
  },
    messages: {
      username: "Please enter a valid username",
      email: "Please enter a valid email address",
      pass: {
        required: "Please provide a password",
        minlength: "Your password must be at least 3 characters long",
      },
      reppass: "Please write the same password"
    },
    submitHandler: function(form){
      form.submit();
    }
  });
});

/*Login*/
$(function(){
  $("form[name='login']").validate({

    rules: {
      username:"required",
      password:"required"
  },
    messages: {
      username: "Please write a username",
      password: "Please write a password",
    },
    submitHandler: function(form){
      form.submit();
    }
  });
});
