<!DOCTYPE HTML>
<html>
<head>
	<title>Recipe</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	
	<script type="text/javascript">
		function getRecipies(){
		
			var recipeValue = $("#ingredient_value").val(); // variable recipeValue contains recipient's ingredient
			
			/* ingridientInfo object contains set of predefined recipes */
			var ingridientInfo	=	{"title":"Recipe Puppy","version":0.1,"href":"http:\/\/www.recipepuppy.com\/",
			"results":[{"title":"Garlic Dijon Grilling Sauce",
			"desc":"Salmon fillets seasoned with a garlic, Dijon herb sauce and served with a squeeze of fresh lemon... delicious!!",
			"ingredients":"garlic, dijon mustard","thumbnail":"http:\/\/img.recipepuppy.com\/631164.jpg"},
			{"title":"Bruschetta With Roasted Garlic and Cherry Tomatoes",
			"desc":"There are other Lemon Garlic vinaigrette on Zaar but the touch of Dijon in this recipe gives it a special character. Lovely on a simple lettuce, tomato salad",
			"ingredients":"garlic, italian bread","thumbnail":"http:\/\/img.recipepuppy.com\/199304.jpg"},
			{"title":"Flatbread With Za?atar","desc":"There are other Lemon Garlic vinaigrette on Zaar but the touch of Dijon in this recipe gives it a special character. Lovely on a simple lettuce, tomato salad",
			"ingredients":"garlic, pita bread","thumbnail":"http:\/\/img.recipepuppy.com\/567386.jpg"},
			{"title":"Garlic Butter for Steaks and Mash Potatoes",
			"desc":"There are other Lemon Garlic vinaigrette on Zaar but the touch of Dijon in this recipe gives it a special character. Lovely on a simple lettuce, tomato salad",
			"ingredients":"butter, garlic","thumbnail":"http:\/\/img.recipepuppy.com\/642047.jpg"}]};
			
			/* END ingridientInfo object contains set of predefined recipes */
			
			var ingridientResultLength	=	Object.keys(ingridientInfo.results).length; // length of ingridientInfo results array
				for(var i=0;i<ingridientResultLength;i++){
					if(ingridientInfo.results[i].title==recipeValue){  // if recipient ingredient is equal to ingridientInfo ingredient, then display the result
						$("#result_recipe_container").css('display','block');
						$("#result_recipe_container").html("<div class='result_left_section'><img src='"+ingridientInfo.results[i].thumbnail+"'></div><div class='result_right_section'><h3>"+ingridientInfo.results[i].ingredients+"</h3><p>"+ingridientInfo.results[i].desc+"</p></div>");
						break;
					}				
				}
				
				/* if recipient matches none of ingridientInfo ingredient , then display 'No result found' */
				if($("#result_recipe_container").html()==""){
					$("#result_recipe_container").css('display','block');
					$("#result_recipe_container").html("Sorry No results found");
				}
		}
	</script>
</head>
<body>
   <div class="banner">
		<div class="wrap">
			<div class="header-top">
				<div class="logo">
					<h1><a href="index.php">Puppy Recipe</a></h1>
				</div>
			</div>
		</div>
   </div>
  <div class="main">
		<div class="wrap">
			<div class="content-top">
				<div class="top-box">
					<h2>Recipe Search</h2>
					<hr>
					<div class="outer_recipe_container">
						<form action="" method="get">
							<div class="recipe_container">
								<div class="left_section"><label>Enter Ingredient:</label></div>
								<div class="right_section"><input name="ingredient_value" id="ingredient_value" type="text" class="textbox" required="required"></div>
								<input type="button" onclick="getRecipies()" value="Search" class="button" />
							</div>
						</form>
					</div>
				</div>
				<div class="result_recipe_container" id="result_recipe_container" style="display:none;"></div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="wrap">
			<div class="footer-text">
				<div class="copy">
					<p> © 2015 All rights Reserved | Design by Nabeel Sheikh</a></p>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>
    	
    	
            