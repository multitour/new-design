function changeCheck(el)
/* 
	функция смены вида и значения чекбокса
	el - span контейнер дял обычного чекбокса
	input - чекбокс
*/
{
     var el = el,
          input = el.getElementsByTagName("input")[0];
		
     if(input.checked)
     {
	     el.style.backgroundPosition="0 -73px"; 
		 input.checked=false;
     }
     else
     {
          el.style.backgroundPosition="0 -94px"; 
		  input.checked=true;
     }
     return true;
}
function startChangeCheck(el)
/*
	если значение установлено в on, меняем вид чекбокса на включенный
*/
{
	if($(el).length>0){
		var el = el,
			  input = el.getElementsByTagName("input")[0];
		 if(input.checked)
		 {
			  el.style.backgroundPosition="0 -73px";     
		  }
		 return true;
	}
	return false;
}

function startCheck()
{
	/*
		 при загрузке страницы заменяем проверяем значение чекбокса в указанном контенере.
		 если чекбоксов несколько, нужно будет несколько раз вызвать функциую с нужными id
	 */
	startChangeCheck(document.getElementById("niceCheckbox"));
}