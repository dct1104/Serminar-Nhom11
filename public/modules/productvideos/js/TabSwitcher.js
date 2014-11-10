/**
* Tab Switcher
* @name TabSwitcher.js
* @author Marghoob Suleman - http://www.marghoobsuleman.com
* @version 1.0
* @date February 11, 2009
* @copyright (c) 2009 Marghoob Suleman (http://www.giftlelo.com)
*/
TabSwitcher = {
	currentLink:'',
	prevLink:'',
	allContents: [],
	isContentLoaded:{},
	path:'',
	init: function(param, p) {
		//console.debug("param " + param);
		this.path = p;
		this.makeTabs(param);
	},
	makeTabs: function(param) {
		var contents = param;
		var content_array = contents.split(";");
		var total = content_array.length;
		//console.debug("total " + total);
		for(var iCount=0;iCount<total;iCount++) {
			var counter = 0;
			var current_content = content_array[iCount].split(",");
			var title = current_content[counter++];
			var content = $.trim(current_content[counter++].toString());
			//reset
			counter = 0
			var id = "mscontentsDiv_"+iCount;
			var textLinkID = "msTab_"+iCount;
			this.allContents[id] = {textLinkID:textLinkID, title:title, page:content, loaded:false};
			//adding links
			$("#msTabHolder_tabs").append("<a class='inActiveTab' id='"+textLinkID+"' href=\"javascript:TabSwitcher.switchTabs('"+id+"')\">"+title+"</a> ");
			//adding div
			$("#msTabHolder_contents").append("<div id='"+id+"' class='inActiveContent'>"+ id +"</div>");
			//console.debug("title " + title + " content " + content);
		}
		this.switchTabs("mscontentsDiv_0");
		//load default
		
		//console.debug("this.allContents " + this.allContents["mscontentsDiv_"+0]);
		
	},
	loadContent: function() {
		
	},
	switchTabs: function(id) {
		//this.currentLink = id;
		if(this.prevLink!='') $('#'+this.prevLink).removeClass('activeTab');
		var contents = this.allContents;
		for(var i in contents) {
			var currentContent = contents[i];
			if(id==i) {
				$('#'+id).show();
				this.currentLink = currentContent.textLinkID;
				$('#'+this.currentLink).removeClass('inActiveTab');
				$('#'+currentContent.textLinkID).addClass("activeTab");
				this.prevLink = this.currentLink;
				//load content if not loaded
				if(currentContent.loaded==false) {
					currentContent.loaded = true;
					$("#"+id).html("Loading...");
					//console.debug("this.path+currentContent.page " + $.trim(this.path)+currentContent.page)
					$("#"+id).load($.trim(this.path)+currentContent.page);
				} 
				
			} else {
				$('#'+i).hide();
			}
		}
	},
	setDefaultTab: function() {
		//will work later. may be in next version
	}
}
