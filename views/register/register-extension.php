<script type="text/javascript">
    function populate(s1,s2){
        var s1= document.getElementById(s1);
        var s2= document.getElementById(s2);
        s2.innerHTML = "";
        if(s1.value == "COB"){
            var optionArray = ["|","BSBA|Bachelor of Science in Business Administration","BSHM|Bachelor of Science in Hospitality Management","BSA|Bachelor of Science in Accountancy"];
        }
        else if(s1.value == "COE"){
            var optionArray = 
            ["|",
            "BSSEM|Bachelor of Secondary Education Major in Mathematics",
            "BSSEF|Bachelor of Secondary Education Major in Filipino",
            "BSSESS|Bachelor of Secondary Education Major in Social Studies",
            "BSSEE|Bachelor of Secondary Education Major in English",
            "BSSES|Bachelor of Secondary Education Major in Science",
            "BSED|Bachelor of Elementary Education"];
        }
        else if(s1.value == "CAS"){
            var optionArray = 
            ["|",
            "BSB|Bachelor of Science in Biology Major in Biotechnology",
            "BSES|Bachelor of Science in Environmental Science Major in Environmental Heritage",
            "BAEL|Bachelor of Arts in English Language",
            "BAE|Bachelor of Arts in Economics",
            "BAS|Bachelor of Arts in Sociology",
            "BAP|Bachelor of Arts in Philosophy",
            "BASC|Bachelor of Arts in Social Science",
            "BSM|Bachelor of Science in Mathematics",
            "BACD|Bachelor of Arts in Community Development",
            "BADC|Bachelor of Arts in Development Communication"];
        }
        else if(s1.value == "COT"){
            var optionArray = 
            ["|",
            "BSAT|Bachelor of Science in Automotive Technology",
            "BSET|Bachelor of Science in Electronics Technology",
            "BSFT|Bachelor of Science in Food Technology",
            "BSIT|Bachelor of Science in Information Technology",
            "BSEMC|Bachelor of Science in Entertainment and Multimedia Computing Major in Digital Animation Technology",
            "BSEMC|Bachelor of Science in Entertainment and Multimedia Computing Major in  Game Development Technology"];
        }
        else if(s1.value == "COA"){
            var optionArray = 
            ["|",
            "BSPA|Bachelor of Science in Public Administration Major in Local Governance"];
        }
        else if(s1.value == "CON"){
            var optionArray = 
            ["|",
            "BSPA|Bachelor of Science in Nursing"];
        }

        for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
        }
    }
</script>
<!-- Select Religion-->


        <!-- Year Level-->
        <label for="" style="color:#6c757d;"> Year level</label>
    <select name="yearl"  class="form-control mb-3">
        <option value=" " disabled selected hidden></option>
        <option value=" ">1st Year</option>
        <option value=" ">2nd Year</option>
        <option value=" ">3rd Year</option>
        <option value=" ">4th Year</option>
    </select>

    <!-- Department-->
    <label for="" style="color:#6c757d;" > College Department</label>
    <select name="slct1" id="slct1" onchange="populate(this.id,'slct2')" class="form-control mb-3">
    <option value=" "disabled selected hidden></option>
    <option value="COB">College of Business</option>
    <option value="COE">College of Education</option>
    <option value="CAS">College of Art and Sciences</option>
    <option value="COA">College of Administration</option>
    <option value="COT">College of Technology</option>
    <option value="CON">College of Nursing</option>
    </select>

<!--Course-->
<label for="" style="color:#6c757d;"> Course</label>
<select name="slct2" id="slct2" class="form-control mb-4">
<option disabled selected hidden></option>
</select>


</body> 
</html>
        


