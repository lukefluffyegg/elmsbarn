(function (window, document, $)
{	
	"use strict";

	// ==================================================================================================================
	// Bind Shim for <=IE8
	// ==================================================================================================================

	if (!Function.prototype.bind)
	{
		Function.prototype.bind = function (context)
		{
			var fn = this;

			return function ()
			{
				return fn.apply(context, arguments);
			};
		};
	}

	// ==================================================================================================================
	// Parent Object
	// ==================================================================================================================

	var starter =
	{	
		// ==================================================================================================================
		// Initialisation Function
		// ==================================================================================================================

		init : function ()
		{
			this.featureName.init();
		},

		// ==================================================================================================================
		// Menu
		// ==================================================================================================================

		featureName :
		{
			$el : $('#el'),

			init : function ()
			{	
				this.setup();
				this.events();
			},

			setup : function ()
			{

			}

			events : function ()
			{	
							
			}
		}	
	};

	// ==================================================================================================================
	// Initialise
	// ==================================================================================================================

	starter.init();

}(window, document, jQuery));