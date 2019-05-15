<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="myApp" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--these are the libraries ( supporting files)-->
<script src="libraries/angular.js" type="text/javascript"></script>
<script src="libraries/angular-route.js" type="text/javascript"></script>
<script src="libraries/jquery-1.9.1.js" type="text/javascript"></script>
<script src="libraries/ui-bootstrap-tpls-0.10.0.min.js" type="text/javascript"></script>
<script src="bootstrap-3.3.1-dist/dist/js/bootstrap.js"></script>

<!--the following are my javascript files-->
<script src="frontend/main.js"></script>

<!--these are the cascading style sheets-->
<link href="bootstrap-3.3.1-dist/dist/css/bootstrap.css" rel="stylesheet"/>

<!--the following are my cascading style sheets-->
<link href="../css/mycss.css" rel="stylesheet" />

<!--introduction of controllers-->

<script src="cotrollers/login.js"></script>

<title>Student Form</title>
</head>
 <body>
     <div class="container">
         <header>
              <div class="mainHeadingDiv">
                <h1 class="ourMainHeading">2015/16 POST-GRADUATE ADMISSIONS</h1>
              </div>
            

             
                <nav>
                 
                 <ul class="myMenu"> 

                 </ul> 
                </nav>

           
          </header>

        
</head>   

<section>
<div>
	<table>
    <form>
    	<tr>
        	<td>
            Matriculation Number:
            </td>
            <td>
            <input type="text" id="matricno" placeholder="Matriculation Number">
            </td>
            <td>
            <span id="matricError" class="myclass"></span>
            </td>
        </tr>
        <tr>
        	<td>
            Pg Application Number:
            </td>
            <td>
            <input type="text" id="pgxno" placeholder="Pg Application Number">
            </td>
            <td>
            <span id="pgxError" class="myclass"></span>
            </td>
        </tr>
        <tr>
        	<td>
            Surname:
            </td>
            <td>
            <input type="text" id="surname" placeholder="Surname">
            </td>
            <td>
            <span id="surnameError" class="myclass"></span>
            </td>
        </tr>
        
        <tr>
        	<td>
            First Name:
            </td>
            <td>
            <input type="text" id="firstName" placeholder="First Name">
            </td>
            <td>
            <span id="firstNameError" class="myclass"></span>
            </td>
        </tr>
        <tr>
        	<td>
            Middle Name:
            </td>
            <td>
            <input type="text" id="middleName" placeholder="Middle Name">
            </td>
            <td>
            <span id="middleNameError" class="myclass"></span>
            </td>
        </tr>
        <tr>
        	<td>
            Date of Birth:
            </td>
            <td>
            <input type="date" id="dateOfBirth" placeholder="Date of Birth">
            </td>
            <td>
            <span id="DateOfBirthError" class="myclass"></span>
            </td>
        </tr>
         <tr>
        	<td>
            Email:
            </td>
            <td>
            <input type="text" id="email" placeholder="email">
            </td>
            <td>
            <span id="emailError" class="myclass"></span>
            </td>
        </tr>
        
        
        
        <tr>
        	<td>
            Programme:
            </td>
            <td>
            <select id="programmeType">
            	<option value = "--Select Programme--" selected>--Select Programme--</option>
                <option value="First Degree">First Degree</option>
                <option value="Sub Degree">Sub Degree</option>
                <option value="Masters Degree">Masters Degree</option>
                <option value="MPhil/Ph.D">MPhil/Ph.D</option>
                <option value="Ph.D">Ph.D</option>
                <option value="Diploma">Diploma</option>
                
                
            </select>
            </td>
            <td>
            <span id="programmeTypeError" class="myclass"></span>
            </td>
        </tr>
        
        <tr>
        	<td>
            Gender:
            </td>
            <td>
            <select id="gender">
            	<option value = "--Select Gender--" selected>--Select Gender--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                                
            </select>
            </td>
            <td>
            <span id="genderError" class="myclass"></span>
            </td>
        </tr>
        
         <tr>
        	<td>
            Entry Dept:
            </td>
            <td>
            <input type="text" id="entry_dept" placeholder="entry_dept">
            </td>
            <td>
            <span id="entry_deptError" class="myclass"></span>
            </td>
        </tr>
        
         <tr>
        	<td>
            Degree Honours:
            </td>
            <td>
            <input type="text" id="degree_honours" placeholder="degree_honours">
            </td>
            <td>
            <span id="degree_honoursError" class="myclass"></span>
            </td>
        </tr>
        
        <tr>
        	<td>
            State Of Origin:
            </td>
            <td>
            <input type="text" id="state_of_origin" placeholder="state_of_origin">
            </td>
            <td>
            <span id="state_of_originError" class="myclass"></span>
            </td>
        </tr>
        <tr>
        	<td>
            Nationality:
            </td>
            <td>
            <input type="text" id="nationality" placeholder="nationality">
            </td>
            <td>
            <span id="nationalityError" class="myclass"></span>
            </td>
        </tr>
       
        <tr>
        	<td>
            Local Govt Area:
            </td>
            <td>
            <input type="text" id="local_govt_area" placeholder="local_govt_area">
            </td>
            <td>
            <span id="local_govt_areaError" class="myclass"></span>
            </td>
        </tr>
        
         <tr>
        	<td>
            Blood Group:
            </td>
            <td>
            <select id="blood_group">
            	<option value = "--Select Blood Group--" selected>--Select Blood Group--</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB">AB</option>
                <option value="O">O+</option>
                
                
                
            </select>
            </td>
            <td>
            <span id="blood_groupError" class="myclass"></span>
            </td>
        </tr>
        
         <tr>
        	<td>
            Blood Genotype:
            </td>
            <td>
            <select id="blood_genotype">
            <option value = "--Select Blood Genotype--" selected>--Select Blood Genotype--</option>
                <option value="AA+">AA+</option>
                <option value="AS+">AS+</option>
                <option value="SS">SS</option>
                <option value="SC">SC</option>
                <option value="others">others</option>
                
                
                
            </select>
            </td>
            <td>
            <span id="blood_genotypeError" class="myclass"></span>
            </td>
        </tr>
            
            <tr>
        	<td>
            Passport:
            </td>
            <td>
            <input type="file" id="passport" placeholder="passport">
            </td>
            <td>
            <span id="passportError" class="myclass"></span>
            </td>
        </tr>
        
            
        <tr>
        	<td colspan="3">
            <input type="submit" value="Submit" id="submitButton"><div id="closereset"><input type="reset" id="ourReset" value="Reset"></div>
            </td>
            
        </tr>
        </form>
    </table>
</div>
</section>

         


         </footer>

     </div>

</body>
</html>
