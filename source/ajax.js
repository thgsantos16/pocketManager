// Ajax Functions
 
function login() {
	var user = $('#userLogin').val();
	var pass = $('#passLogin').val();

	$.post("actions/login.php", {user: user, pass: pass}, function(result){
       var res = result.split('|');
       if(res[0] == "Logged") {
          user = res[1];
       		message('Logged Successfully!', 'success');
          navigate('dashboard');
          innerPages(user);
          $(':input').val('');
       }
       else message(result, 'error');
    });
}

function register() {
  var user = $('#userRegister').val();
  var pass = $('#passRegister').val();
  var name = $('#nameRegister').val();
  var rePass = $('#rePassRegister').val();

  $.post("actions/register.php", {user: user, pass: pass, name: name, rePass: rePass}, function(result){
       if(result == "Registered") {
          message('User registered Successfully!', 'success')
          navigate('root');
          $(':input').val('');
       }
       else message(result, 'error');
    });
}

function addExpenseAppear() {
  $("#addExpense").load("./views/addExpense.html");
  $("#whiteShadow").fadeIn();
  $("#addExpense").fadeIn();
}

function addExpense() {
  $("#whiteShadow").fadeOut();
  $("#addExpense").fadeOut();
  var description = $('#descriptionAddExpense').val();
  var date = $('#dateAddExpense').val();
  var hour = $('#hourAddExpense').val();
  var val = $('#valueAddExpense').val();
  var comment = $('#commentAddExpense').val();

  $.post("actions/addExpense.php", {description: description, date: date, hour: hour, val: val, comment: comment}, function(result){
       var res = result.split('|');
       if(res[0] == "Registered") {
          user = res[1];
          message('Expense Added Successfully!', 'success')
          innerPages(user);
          $(':input').val('');
       }
       else message(result, 'error');
    });
}