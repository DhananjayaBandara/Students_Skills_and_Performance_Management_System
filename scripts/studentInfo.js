var regNo=document.getElementById("regNo").value;
var initialName=document.getElementById("initialName").value;
var fullName=document.getElementById("fullName").value;
var district=document.getElementById("district").value;
var school =document.getElementById("school").value;
var birthday=document.getElementById("birthday").value;
var age=document.getElementById("age").value;
var gender=document.getElementById("gender").value;
var mobileNo=document.getElementById("mobileNo").value;
var email=document.getElementById("email").value;
var address=document.getElementById("address").value;
var faculty=document.getElementById("faculty").value;
var department=document.getElementById("department").value;
var course=document.getElementById("course").value;
var academicYear=document.getElementById("academicYear").value;
var level=document.getElementById("level");
var gpa=document.getElementById("gpa");
var credits=document.getElementById("credits");
var clas=document.getElementById("class");
var extra=document.getElementById("extra");
var progLang=document.getElementById("progLang");
var webDesigning=document.getElementById("webDesigning");
var project=document.getElementById("project");

document.getElementById("name").innerText=initialName;


function addExperience(){
            
    var title=document.stuData.title.value;
    var company=document.stuData.company.value;
    var duration=document.stuData.duration.value;
    var description=document.stuData.description.value;

    if(title.length != 0){
        var tr=document.createElement('tr');

        var td1=tr.appendChild(document.createElement('td'));
        var td2=tr.appendChild(document.createElement('td'));
        var td3=tr.appendChild(document.createElement('td'));
        var td4=tr.appendChild(document.createElement('td'));
        var td5=tr.appendChild(document.createElement('td'));
        
        td1.innerHTML='<input type="hidden" name="title[]" value="'+title+'">'+title;
        td2.innerHTML='<input type="hidden" name="company[]" value="'+company+'">'+company;
        td3.innerHTML='<input type="hidden" name="duration[]" value="'+duration+'">'+duration;
        td4.innerHTML='<input type="hidden" name="description[]" value="'+description+'">'+description;
        td5.innerHTML='<input type="button" id="removeButton" name="removeButton" value="Remove Work Experience" onclick="removeExperience(this);">'

        document.getElementById("experienceTable").appendChild(tr);

    }
    document.stuData.title.value="";
    document.stuData.company.value="";
    document.stuData.duration.value="";
    document.stuData.description.value="";
    
}
function removeExperience(exp){
    var p=exp.parentNode.parentNode;
    p.parentNode.removeChild(p);
}

function addProject(){
    
    var proLink=document.stuData.projLink.value;
    var proDesc=document.stuData.projDesc.value;

    if(proLink.length != 0){
        var tr=document.createElement('tr');

        var td1=tr.appendChild(document.createElement('td'));
        var td2=tr.appendChild(document.createElement('td'));
        var td3=tr.appendChild(document.createElement('td'));
        
        td1.innerHTML='<input type="hidden" name="projLink[]" value="'+proLink+'">'+proLink;
        td2.innerHTML='<input type="hidden" name="projDesc[]" value="'+proDesc+'">'+proDesc;
        td3.innerHTML='<input type="button" id="removeButton" name="removeButton" value="Remove Project" onclick="removeProject(this);">'

        document.getElementById("projectTable").appendChild(tr);

    }
    document.stuData.projLink.value="";
    document.stuData.projDesc.value="";
    
}
function removeProject(project){
    var p=project.parentNode.parentNode;
    p.parentNode.removeChild(p);
}
