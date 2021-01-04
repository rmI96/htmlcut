var Materials = {
    "cement_sand_solution_cc": [{"text": "1800", "value": 0.81}],
    "cement_slag_solution_cc": [{"text": "1700", "value": 0.76}],
    "cement_sand_silicat_cc": [{"text": "1800", "value": 0.87}],
    "ceramic_hollow": [{"text": "1600", "value": 0.64}, {"text": "1400", "value": 0.58}, {"text": "1200", "value": 0.52}],
    "porotherm_25": [{"text": "811", "value": 0.31}],
    "porotherm_30": [{"text": "790", "value": 0.23}],
    "kermesitecement_blocks": [{"text": "700", "value": 0.23}, {"text": "800", "value": 0.24}, {"text": "1000", "value": 0.27}, {"text": "1200", "value": 0.29}],
    "eclc_on_slag": [{"text": "1350", "value": 0.51}, {"text": "1400", "value": 0.43}],
    "kermesitecement_blocks_limy_solution": [{"text": "400", "value": 0.092}],
    "cellular_concrete": [{"text": "500", "value": 0.16}, {"text": "600", "value": 0.18}, {"text": "700", "value": 0.27}, {"text": "800", "value": 0.30}, {"text": "900", "value": 0.36}, {"text": "1000", "value": 0.44}, {"text": "1100", "value": 0.51}, {"text": "1200", "value": 0.55}],
    "foamed_concrete": [{"text": "1000", "value": 0.5}, {"text": "1200", "value": 0.58}],
    "eclc_on_keramzite_sand": [{"text": "500", "value": 0.23}, {"text": "600", "value": 0.26}, {"text": "800", "value": 0.31}, {"text": "1000", "value": 0.41}, {"text": "1200", "value": 0.52}, {"text": "1400", "value": 0.65}, {"text": "1600", "value": 0.79}, {"text": "1800", "value": 0.92}],
    "eclc_on_quartz_sand": [{"text": "800", "value": 0.35}, {"text": "1000", "value": 0.47}, {"text": "1200", "value": 0.58}],
    "eclc_on_pearlitic_sand": [{"text": "800","value": 0.35}, {"text": "1000", "value": 0.41}],
    "eclc": [{"text": "1000", "value": 0.41}], 
    "pearlitic_concrete": [{"text": "600", "value": 0.23}, {"text": "800", "value": 0.33}, {"text": "1000", "value": 0.38}, {"text": "1200", "value": 0.5}],
    "slag_pumice_concrete": [{"text": "1000", "value": 0.37}, {"text": "1200", "value": 0.44}, {"text": "1400", "value": 0.52},{"text": "1600", "value": 0.63}],
    "granulated_slag_concrete": [{"text": "1200", "value": 0.52}, {"text": "1400", "value": 0.58}, {"text": "1600", "value": 0.64}], 
    "gravel_ash_concrete": [{"text": "1000", "value": 0.35}, {"text": "1200", "value": 0.47}, {"text": "1400", "value": 0.58}],
    "ferroconcrete": [{"text": "2500", "value": 2.04}],
    "concrete_on_gravel_or_rubble": [{"text": "2400", "value": 1.86}],
    "cement_sand_mortar": [{"text": "1600", "value": 0.81}],
    "complex_solution": [{"text": "1700", "value": 0.87}], 
    "lime_sand_mortar": [{"text": "1800", "value": 0.93}],
    "granite": [{"text": "2800", "value": 3.49}],
    "marble": [{"text": "2800", "value": 2.91}],
    "limestone": [{"text": "1600", "value": 0.81}, {"text": "1800", "value": 1.05}, {"text": "2000", "value": 1.28}],
    "floor_ceramic_plates": [{"text": "2000", "value": 1.1}],
    "slabs_of_plaster": [{"text": "1000", "value": 0.35}, {"text": "1200", "value": 0.47}],
    "ps_across_fibers": [{"text": "500", "value": 0.18}],
    "ps_along_fibers": [{"text": "500", "value": 0.35}],
    "oak_across_fibers": [{"text": "700", "value": 0.23}],
    "oak_along_fibers": [{"text": "700", "value": 0.41}],
    "plywood": [{"text": "600", "value": 0.18}],
    "cardboard_facing": [{"text": "1000", "value": 0.23}],
    "cardboard_building": [{"text": "650", "value": 0.18}]  
};

function SetOkMessage(element, message) {
    $(element).parents('label').children('.calculator-ok').html(message);
}

function DeleteOkMessage(element) {
    $(element).parents('label').children('.calculator-ok').html('');
}

function SetErrorMessage(element, message) {
    // $(element).parents('label').children('.calculator-error').html(message);

    $(element).addClass('invalid');
}

function DeleteErrorMessage(element) {
    // $(element).parents('label').children('.calculator-error').html('');

    $(element).removeClass('invalid');
}

var Calculator = new function() {
    this.region_multiplier	= 0.00;
    this.wall_thickness	= 0.00;
    this.material		= 0.000;
    this.thermal		= 0.000;
    this.result		= 0.00;

    this.materials		= null;
    this.messages		= null;
    this.formulaparams		= null;
    
    this.setMaterials = function(materials) {
        this.materials = materials;
    };

    this.setMessages = function(messages) {
        this.messages = messages;
    };
	
    this.setFormulaParams = function(formulaparams) {
        this.formulaparams = formulaparams;
    };

    this.setFormulaUnity = function(formulaunity) {
        this.formulaunity = formulaunity;
    };


    this.clear = function() {
        this.region_multiplier	= 0.00;
        this.wall_thickness	= 0.00;
        this.material		= 0.000;
        this.thermal		= 0.000;
        this.result		= 0.00;
		
        $('#calculator-result').html('--');
        $("span.jquery-selectbox-currentItem").html($("div.jquery-custom-selectboxes-replaced-list span.jquery-selectbox-item:first-child").html());
		
        this._clearOptions('select#material');
        $("#material-subselect").hide();
        $('label').children('.calculator-ok').html('');
        $('label').children('.calculator-error').html('');
		
    }

    this.calculateTotalValue = function() {
        this.result = Math.abs((this.region_multiplier - (this.wall_thickness/this.material))*this.thermal);
        if(this.result) {
            $('#calculator-result').html((this.result*100).toFixed(2));
        }
    };

    this.setRegionMultiplier = function() {
        var value = parseFloat($("#region").val())
        if(value > 0) {
            this.region_multiplier = value;
            SetOkMessage("#region", this.formulaparams.RQ + value + this.formulaunity.RQ_UNITY);	
            DeleteErrorMessage("#region");
        } else {
            this.region_multiplier = 0.00;
            DeleteOkMessage("#region");
            SetErrorMessage("#region", this.messages.ERROR_REGION);	
        }
    };
	
    this.setWallThickness = function() {
        var value = parseFloat($("#wall_thickness").val());
        if(value > 0) {
            this.wall_thickness = value / 100; // convert to meters
            SetOkMessage("#wall_thickness", this.formulaparams.S1 + this.wall_thickness + this.formulaunity.S1_UNITY);	
            DeleteErrorMessage("#wall_thickness");
        } else {
            this.wall_thickness = 0.00;
            DeleteOkMessage("#wall_thickness");
            SetErrorMessage("#wall_thickness", this.messages.ERROR_WALL_THICKNESS);	
        }
    };

    this.setThermalConductivity = function() {
        var value = parseFloat($("#plate_type").val());
        if(value > 0) {
            this.thermal = value;
            SetOkMessage("#plate_type", this.formulaparams.LYAMBDA_D + this.thermal + this.formulaunity.LYAMBDA_D_UNITY);	
            DeleteErrorMessage("#plate_type");
        } else {
            this.thermal = 0.000;
            DeleteOkMessage("#plate_type");
            SetErrorMessage("#plate_type", this.messages.ERROR_PLATE_TYPE);	
        }
    };

    this.setMaterialConductivity = function(value) {
        if(value > 0) {
            this.material = value;
            SetOkMessage("#material", this.formulaparams.LYAMBDA_P + this.material + this.formulaunity.LYAMBDA_P_UNITY);	
            DeleteErrorMessage("#material");
        } else {
            this.material = 0.000;
	        DeleteOkMessage("#material");
            SetErrorMessage("#material", this.messages.ERROR_MATERIAL);	
        }
    };
    
    this.validMaterialData = function(){
        var value = parseFloat($("#material").val());
        if(value > 0) {
            DeleteErrorMessage("#material");
        } else {
            SetErrorMessage("#material", this.messages.ERROR_MATERIAL);	
        }
        
        var value = $("#material_type").val();
        if(value != "_") {
            DeleteErrorMessage("#material_type");
        } else {
            SetErrorMessage("#material_type", this.messages.ERROR_MATERIAL_TYPE);	
        }
    }
    /////////////////////////////////////////////////////////////
    this.GenerateAdditionalSelect = function(material) {
        if(material) {
            if(this.materials[material]) {
                // clear not needed option from select
                this._clearOptions("#material");
                // generate select
                for(var i in this.materials[material]) {
                    $("#material").append(
                        $("<option></option>").val(this.materials[material][i].value).html(this.materials[material][i].text)
                    );
                }
                // display select
                $("#material-subselect").fadeIn("slow");
            }
        } else {
            $("#material-subselect").fadeOut("fast");
        }

        //init #material select
        $('#material')[0].sumo.unload();
        $('#material').SumoSelect();
        //
        
    };
    

    this._clearOptions = function(element){
        $(element).find("option").remove();
        $(element).append(
            $('<option></option>').val('').html(this.messages.LABEL_DENSITY)
            );
    };
    
    
}

$(document).ready(function(){
    $("#region").change(function(){
        Calculator.setRegionMultiplier()
    });
    $("#plate_type").change(function(){
        Calculator.setThermalConductivity()
    });
    $("#material_type").change(function(){
        if( $(this).val() == "_"){
            Calculator._clearOptions("#material");
	    DeleteOkMessage("#material");
            SetErrorMessage("#material_type", Calculator.messages.ERROR_MATERIAL_TYPE);
        } else {    
            Calculator.GenerateAdditionalSelect($(this).val())
	    DeleteOkMessage("#material");
            DeleteErrorMessage("#material_type");
        }
    });
    $("#material").change(function(){
        value = parseFloat($(this).val()); 
        Calculator.setMaterialConductivity(value)
    });
    $("#wall_thickness").blur(function(){
        Calculator.setWallThickness()
    });
    $("#calculator-reset-button").click(function(){
        Calculator.clear();
    });
    $("#calculator").submit(function() {
        Calculator.setRegionMultiplier();
        Calculator.setThermalConductivity();
        Calculator.calculateTotalValue();
        Calculator.validMaterialData();
        Calculator.setWallThickness()
        return false;
    });
})

