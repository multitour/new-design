
(function(jQuery) {
  
  jQuery.fn.tablehighlight = function(options){
    var config = {};
		config.container = this;
		config = jQuery.extend(true, config, jQuery.fn.tablehighlight.config, options);		
    return this.each(function(){
      if(this.__thl) return;
      else this.__thl = true; 			
			jQuery.fn.tablehighlight.hover(config);			
    });
  };
  
	jQuery.fn.tablehighlight.find = function(config, firstlvl, secondlvl){
		var firstselector = config.selectors[firstlvl],
				secondselector = (typeof secondlvl != "undefined" && typeof config.selectors[secondlvl] != "undefined") ? config.selectors[secondlvl] : false,				
				jq_elements = (secondselector != false) ? jQuery(config.container).find(firstselector).find(secondselector) : jQuery(config.container).find(firstselector),
				obj_found = []
		jq_elements.each(function(){obj_found.push(this);});
		return obj_found;
	};
	
	jQuery.fn.tablehighlight.hover = function(config){
		var rows = jQuery(config.container).find(config.selectors.rows),
				colheaders = jQuery(config.container).find(config.selectors.column_header);
		//hover on the cell - hightlight column, highlight row
		jQuery(config.container).find(config.selectors.row_data).unbind("mouseover mouseout").bind("mouseover", function(){
			jQuery(this).addClass(config.active_classes.current_hover);
			jQuery.fn.tablehighlight.column(config, this, rows, colheaders);
			jQuery.fn.tablehighlight.row(config, this, rows, colheaders);
		}).bind("mouseout", function(){
			jQuery(this).removeClass(config.active_classes.current_hover);
			jQuery.fn.tablehighlight.column(config, this, rows, colheaders, true);
			jQuery.fn.tablehighlight.row(config, this, rows, colheaders, true);
		});
		//hover on row heading
		jQuery(config.container).find(config.selectors.row_header).unbind("mouseover mouseout").bind("mouseover", function(){
			jQuery(this).addClass(config.active_classes.current_hover);			
			jQuery.fn.tablehighlight.row(config, this, rows, colheaders);
		}).bind("mouseout", function(){
			jQuery(this).removeClass(config.active_classes.current_hover);			
			jQuery.fn.tablehighlight.row(config, this, rows, colheaders, true);
		});
		//hover on the col heading
		jQuery(config.container).find(config.selectors.column_header).unbind("mouseover mouseout").bind("mouseover", function(){
			var ind = jQuery(this).closest(config.selectors.headings).find(config.selectors.column_header).index(this),
					obj = jQuery(rows[0]).find(config.selectors.row_data).eq(ind);
			jQuery.fn.tablehighlight.column(config, obj, rows, colheaders);
			jQuery(this).addClass(config.active_classes.current_hover);
		}).bind("mouseout", function(){
			var ind = jQuery(this).closest(config.selectors.headings).find(config.selectors.column_header).index(this),
					obj = jQuery(rows[0]).find(config.selectors.row_data).eq(ind);
			jQuery.fn.tablehighlight.column(config, obj, rows, colheaders, true);
			jQuery(this).removeClass(config.active_classes.current_hover);
		});
		
	};
	jQuery.fn.tablehighlight.column = function(config, obj, rows, colheaders, removeclass){
		var activerow = jQuery(obj).closest(config.selectors.rows),				
				rownumber = jQuery(rows).index(activerow),
				colnumber = activerow.find(config.selectors.row_data).index(obj),
	 			colheader = colheaders[colnumber]
				;
		if(removeclass == true) jQuery(colheader).removeClass(config.active_classes.all).removeClass(config.active_classes.column_header);
		else jQuery(colheader).addClass(config.active_classes.all).addClass(config.active_classes.column_header);
		jQuery(rows).each(function(){
			var tdcell = jQuery(this).find(config.selectors.row_data).eq(colnumber);
			if(removeclass == true) tdcell.removeClass(config.active_classes.all).removeClass(config.active_classes.row_data);
			else tdcell.addClass(config.active_classes.all).addClass(config.active_classes.row_data);
		});
	};
	jQuery.fn.tablehighlight.row = function(config, obj, rows, colheaders, removeclass){
		var activerow = jQuery(obj).closest(config.selectors.rows),
				rowheader = jQuery(obj).closest(config.selectors.rows).find(config.selectors.row_header);
				
		if(removeclass == true){
			jQuery(rowheader).removeClass(config.active_classes.all).removeClass(config.active_classes.row_header);
			jQuery(activerow).find(config.selectors.row_data).removeClass(config.active_classes.all).removeClass(config.active_classes.row_data);
		}else{
			jQuery(rowheader).addClass(config.active_classes.all).addClass(config.active_classes.row_header);
			jQuery(activerow).find(config.selectors.row_data).addClass(config.active_classes.all).addClass(config.active_classes.row_data);
		}
	
	};
	

jQuery.fn.tablehighlight.config = {
	"selectors":{
		"headings":'.heading',
		'column_header': '.column_header',
		'rows': '.row_tr',
		'row_header': '.row_header',
		'row_data': '.row_data'
	},
	"active_classes":{
		"all": "active",
		"column_header":"active_column_header",
		"rows":"active_row",
		"row_header": "active_row_header",
		"row_data": "active_row_data",
		"current_hover": "active_position"
	}
};

    
})(jQuery);
