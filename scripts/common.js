/**
 * addEvent written by Dean Edwards, 2005
 * with input from Tino Zijdel
 *
 * http://dean.edwards.name/weblog/2005/10/add-event/
 **/
function addEvent(element, type, handler) {
	// assign each event handler a unique ID
	if (!handler.$$guid) handler.$$guid = addEvent.guid++;
	// create a hash table of event types for the element
	if (!element.events) element.events = {};
	// create a hash table of event handlers for each element/event pair
	var handlers = element.events[type];
	if (!handlers) {
		handlers = element.events[type] = {};
		// store the existing event handler (if there is one)
		if (element["on" + type]) {
			handlers[0] = element["on" + type];
		}
	}
	// store the event handler in the hash table
	handlers[handler.$$guid] = handler;
	// assign a global event handler to do all the work
	element["on" + type] = handleEvent;
};
// a counter used to create unique IDs
addEvent.guid = 1;

function removeEvent(element, type, handler) {
	// delete the event handler from the hash table
	if (element.events && element.events[type]) {
		delete element.events[type][handler.$$guid];
	}
};

function handleEvent(event) {
	var returnValue = true;
	// grab the event object (IE uses a global event object)
	event = event || fixEvent(window.event);
	// get a reference to the hash table of event handlers
	var handlers = this.events[event.type];
	// execute each event handler
	for (var i in handlers) {
		this.$$handleEvent = handlers[i];
		if (this.$$handleEvent(event) === false) {
			returnValue = false;
		}
	}
	return returnValue;
};

function fixEvent(event) {
	// add W3C standard event methods
	event.preventDefault = fixEvent.preventDefault;
	event.stopPropagation = fixEvent.stopPropagation;
	return event;
};
fixEvent.preventDefault = function() {
	this.returnValue = false;
};
fixEvent.stopPropagation = function() {
	this.cancelBubble = true;
};

// end from Dean Edwards


/**
 * Creates an Element for insertion into the DOM tree.
 * From http://simon.incutio.com/archive/2003/06/15/javascriptWithXML
 *
 * @param element the element type to be created.
 *				e.g. ul (no angle brackets)
 **/
function createElement(element) {
	if (typeof document.createElementNS != 'undefined') {
		return document.createElementNS('http://www.w3.org/1999/xhtml', element);
	}
	if (typeof document.createElement != 'undefined') {
		return document.createElement(element);
	}
	return false;
}

/**
 * "targ" is the element which caused this function to be called
 * from http://www.quirksmode.org/js/events_properties.html
 **/
function getEventTarget(e) {
	var targ;
	if (!e) {
		e = window.event;
	}
	if (e.target) {
		targ = e.target;
	} else if (e.srcElement) {
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}

	return targ;
}

function addItems(fromCtrl, toCtrl) {
	var i;
	var j;
	var itemexists;
	var nextitem;

	// step through all items in fromCtrl
	for (i = 0; i < fromCtrl.options.length; i++) {
		if (fromCtrl.options[i].selected) {
			// search toCtrl to see if duplicate
			j = 0;
			itemexists = false;
			while ((j < toCtrl.options.length) && (!(itemexists))) {
				if (toCtrl.options[j].value == fromCtrl.options[i].value) {
					itemexists = true;
					//alert(fromCtrl.options[i].value + " found!");
				}
				j++;
			}
			if (!(itemexists)) {
				// add the item
				nextitem = toCtrl.options.length;
				toCtrl.options[nextitem] = new Option(fromCtrl.options[i].text);
				toCtrl.options[nextitem].value = fromCtrl.options[i].value;
			}
		}
	}
}

function removeItems(fromCtrl) {
	var i = 0;
	var j;
	var k = 0;

	while (i < (fromCtrl.options.length - k)) {
		if (fromCtrl.options[i].selected) {
			// remove the item
			for (j = i; j < (fromCtrl.options.length - 1); j++) {
				fromCtrl.options[j].text = fromCtrl.options[j+1].text;
				fromCtrl.options[j].value = fromCtrl.options[j+1].value;
				fromCtrl.options[j].selected = fromCtrl.options[j+1].selected;
			}
			k++;
		} else {
			i++;
		}
	}
	for (i = 0; i < k; i++) {
		fromCtrl.options[fromCtrl.options.length - 1] = null;
	}
}
function popupOpen(url) {
window.open(url,'portalPopUp','status, width=700, height=520, screenX=50,screenY=50,left=0,top=0,scrollbars=yes');

}
//new method added to avoid using a get, this method opens a window with blank.html
function showPopup(webCtx) {
window.open(webCtx+'/common/jsp/blank.jsp', 'portalPopUp', 'status, width=700, height=520, screenX=50,screenY=50,left=0,top=0,scrollbars=yes');
}

//function showHelp(urlVal) {
//window.open(urlVal, 'PortalHelp', 'status, width=700, height=520, screenX=50,screenY=50,left=0,top=0,scrollbars=yes');
//}

function deleteconfirm()
{
	  var result
	  result = confirm("Do you want to delete?");
	  return result;		
}


	function validAlphaNum(curItem)
	{	
		//it will only take the alphabatic characters from A-Z
		re=/^[a-zA-Z0-9\-\_\s\t]+$/

		if (!re.test(curItem))
		{
			return false;
		}
		return true;
	}
	function validInt(curItem)
	{	
		//it will only take the alphabatic characters from A-Z
		re=/^[0-9]+$/

		if (!re.test(curItem))
		{
			return false;
		}
		return true;
	}
function compareDate(date1,date2)
{
	//var datearr1;
	//var datearr2;

	//datearr1 = date1.split("/");
	//datearr2 = date2.split("/");

	//datenew1 = new Date (datearr1[2],datearr1[1],datearr1[0]);
	//datenew2 = new Date (datearr2[2],datearr2[1],datearr2[0]);
	//return (datenew1 >= datenew2);
	
	
	
	  // Get value of FromDate & ToDate
	  var strFromDate =date1;
	  //alert(strFromDate);
	  strFromDate = strFromDate.split('/');
	  strFromDate = -((-strFromDate[2]*20-strFromDate[1])*50-strFromDate[0]);
	
	  var strToDate = date2;
	  //alert(strToDate);
	  strToDate = strToDate.split('/');
	  strToDate = -((-strToDate[2]*20-strToDate[1])*50-strToDate[0]);
	
	  return(strFromDate >= strToDate);
	  //if(strFromDate > strToDate)
	  //{
	  	//alert("from date is greater");
		//}else{
	  	//alert("to date is greater");
	  	
 }


function showHelp(ctxPath)
{
	
	window.open(ctxPath+'/portalHelp/!SSL!/WebHelp/SPSPortalOnlineHelp.htm#'+document.helpForm.screenID.value, 'Help',
  'status, width=850, height=600, screenX=50,screenY=50,left=50,top=0,scrollbars=yes,resizable=1');
	
}
function setScreenID(screenID)
{
		document.helpForm.screenID.value = screenID;
}
/* changes made for cr007 after UAT
 this function will remove special character
 like <,>,#,@,!
 */
 
 function RemoveSpecialCharacter(xyz)
{
	         var2=0;
	         var1=xyz;
	         //alert("VAR1="+var1);
	         var index1=-1;
	         
	         var3="<>!@#$";
			  //alert(var3.length);
	         for(i=0;i<var3.length;i++)
	         {
                index=-1;
                len=var1.length+1;
                var2=(var3.charAt(i)).toString();
                for(j=0;j<=len;j++)
	            {
                   index1=-1;
                   if(var1.indexOf(var2,0)>=0)
         		   	{
    		   	          index1=var1.indexOf(var2,0);
     		   	          
		   	        }
        		   	if(index1<0)
		   	         {
		   	           
		   	           break;
						
		   	          }
		   	        else
		   	         {
		   	            temp1=var1.substring(0,index1);
						//alert("temp1="+temp1);
		   	           temp2=var1.substring(index1+1,var1.length);
							//alert("temp2="+temp2);
		   	           var1=temp1+temp2;
		   	                //alert("var1="+var1);
		   	           //len=var1.length+1;
		   	            
		   	          }
		   	     
			     

	        }
         }
	
	return var1;
	--alert("specialInstructions.value="+var1);
}
/* end of changes made for cr007 after uat */