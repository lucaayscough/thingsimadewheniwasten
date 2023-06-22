// Password strength meter [modified for UTF-8 CuteNews]
// The original jQuery plugin is written by firas kassem [2007.04.05]
// Firas Kassem  phiras.wordpress.com || phiras at gmail {dot} com
// for more information : http://phiras.wordpress.com/2007/04/08/password-strength-meter-a-jquery-plugin/

var badPass = 'Bad'
var avgPass = 'Average'
var goodPass = 'Good'
var strongPass = 'Strong'

function passwordStrength(password){
var text = ''
score = 0

//password < 4
if(password.length < 1) return ''
if(password.length < 5) return '<span style="color: red">Password too short</span>'
if(password.length > 50) return '<span style="color: red">Password too long</span>'


//password length
score += password.length * 4
score += ( checkRepetition(1,password).length - password.length ) * 1
score += ( checkRepetition(2,password).length - password.length ) * 1
score += ( checkRepetition(3,password).length - password.length ) * 1
score += ( checkRepetition(4,password).length - password.length ) * 1

//password has 3 numbers
if(password.match(/(.*[0-9].*[0-9].*[0-9])/))  score += 5 

//password has 2 symbols
if(password.match(/(.*[!,@,#,$,%,^,&,*,?,_,~].*[!,@,#,$,%,^,&,*,?,_,~])/)) score += 5 

//password has Upper and Lower chars
if(password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  score += 10 

//password has number and chars
if(password.match(/([a-zA-Z])/) && password.match(/([0-9])/))  score += 15 

//password has number and symbol
if(password.match(/([!,@,#,$,%,^,&,*,?,_,~])/) && password.match(/([0-9])/))  score += 15 

//password has char and symbol
if(password.match(/([!,@,#,$,%,^,&,*,?,_,~])/) && password.match(/([a-zA-Z])/))  score += 15 

//password is just a nubers or chars
if(password.match(/^\w+$/) || password.match(/^\d+$/))  score -= 10 

//verifing 0 < score < 100
if(score < 0) score = 0 
if(score > 100) score = 100 
    
if(score < 35) text = badPass 
else if(score < 52) text = avgPass
else if(score < 73){
 if(password.length < 7){ text = avgPass }
 text = goodPass;
}
else text = strongPass


if(score < 40){ color = 'rgb(255, ' + Math.round((165/50) * score) + ', 0)'; }
else if(score < 74){ color = 'rgb(' + (255 - Math.round((155/34) * (score - 40))) + ', ' + (165 + Math.round((90/34) * (score - 40))) + ', 0)'; }
else color = 'rgb(' + (100 - Math.round((100/26) * (score - 74))) + ', ' + (255 - Math.round((155/26) * (score - 74))) + ', 0)'; 

return 'Password strength: <span style="color: ' + color + '" title="' + score + '/100">' + text + '</span>';
}

function checkRepetition(pLen,str) {
res = ""
for(i=0; i<str.length; i++){
	repeated=true
	for(j=0;j < pLen && (j+i+pLen) < str.length;j++)
	repeated=repeated && (str.charAt(j+i)==str.charAt(j+i+pLen))
	if(j<pLen) repeated=false
	if(repeated){
		i+=pLen-1
		repeated=false
	}
	else{
		res+=str.charAt(i)
	}
}
return res
}