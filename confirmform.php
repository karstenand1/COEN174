<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <title>Judge Evaluation Form Confirmation</title>
  <meta name="description" content="Judge Eval Form page 1">
  <meta name="author" content="Group 1">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="formstyle.css">

  </head>

  <body>
    <div id="topbar">
      <h1>Confirm Submit</h1>
    </div>
<div id="formpage" style="display:none;">
    <div style="margin-right: auto; margin-left:auto; width:initial;">
      <table  style="float:center" class=" nobordertable displaydata">
        <tr>
          <td class=" leftcol ">Judge ID: </td>
          <td class="  old" id= "jID"><?php echo $_POST['judgeId']; ?> </td>

          <td class="leftcol ">Session:</td>
          <td class=" old" id="session"><?php echo $_POST['session']; ?></td>

          <td class="leftcol">Project Name:</td>
          <td class="rightcol" id="project"> <?php echo $_POST['project']; ?></td>

          <td class="leftcol">Team Members:</td>
          <td class="rightcol" id="members" style="max-width: 150px; "><?php echo $_POST['team']; ?></td>
        </tr>
        <tr>
          <td class="leftcol ">Judge Name:</td>
          <td class=" old" id="jName"><?php echo $_POST['judgeName']; ?></td>

          <td class="leftcol ">Room:</td>
          <td class=" old" id="room"><?php echo $_POST['room']; ?></td>

          <td class="leftcol">Advisor:</td>
          <td class="rightcol" id="advisor"><?php echo $_POST['advisor']; ?></td>
          <td></td><td></td>
        </tr>
      </table>

    </div>
    <div class="displayfinal">
      <table style="float:left;" class="stripe">
        <tr>
          <th>Design Project</th>
          <th>Score</th>
        </tr>
        <tr>
          <td>Technical Accuracy</td>
          <td id="DP1"><?php echo $_POST['DP1']; ?></td>
        </tr>
        <tr>
          <td>Creativity and Innovation</td>
          <td id="DP2"><?php echo $_POST['DP2']; ?></td>
        </tr>
        <tr>
          <td>Supporting Analytical Work</td>
          <td id="DP3"><?php echo $_POST['DP3']; ?></td>
        </tr>
        <tr>
          <td>Methodical Design Process Demonstrated</td>
          <td id="DP4"><?php echo $_POST['DP4']; ?></td>
        </tr>
        <tr>
          <td>Addresses Project Complexity Appropriately</td>
          <td id="DP5"><?php echo $_POST['DP5']; ?></td>
        </tr>
        <tr>
          <td>Expectation of Completion</td>
          <td id="DP6"><?php echo $_POST['DP6']; ?></td>
        </tr>
        <tr>
          <td>Design and Analysis of Tests</td>
          <td id="DP7"><?php echo $_POST['DP7']; ?></td>
        </tr>
        <tr>
          <td>Quality of Response during Q and A</td>
          <td id="DP8"><?php echo $_POST['DP8']; ?></td>
        </tr>
      </table>


      <table style="float:right;" class="stripe">
        <tr>
          <th>Presentation</th>
          <th>Score</th>
        </tr>
        <tr>
          <td>Organization</td>
          <td id="P1"><?php echo $_POST['P1']; ?></td>
        </tr>
        <tr>
          <td>Use of Allotted Time</td>
          <td id="P2"><?php echo $_POST['P2']; ?></td>
        </tr>
        <tr>
          <td>Visual Aids</td>
          <td id="P3"><?php echo $_POST['P3']; ?></td>
        </tr>
        <tr>
          <td>Confidence and Poise</td>
          <td id="P4"><?php echo $_POST['P4']; ?></td>
        </tr>
      </table>
      <br/>
      <h3 style="margin-top: 20px; float: right;width: 245px; word-wrap: normal;"> <p id="total"> </p></h3>

      <div class="clearfix"></div>

      <div id="commentsection">
        <table  class="stripe" style="width:100%">
          <tr>
            <th>Considerations</th>
          </tr>
          <tr>
            <td> <p id="consider"></p></td>

          </tr>
          <tr>
            <th>Comments</th>
          </tr>
          <tr>
            <td><p id="comments"><?php echo $_POST['comments']; ?></p></td>
          </tr>

        </table>
      </div>
      <div class="clearfix"></div>

      <div style="text-align: center;">
        <button id="sendbutton" style=" width: 200px;  font-size: 20px;" onclick="sendScores()">Submit Scores</button>
        <br/>
        <h3 id="success" style="display:none"> 
          Submit Successful <br/>
         </h3>
          <br/>
          <br/>
          <form  method="post" style="display:none;  background: #FFE3C4; padding: 10px;" id="presentations" action="actualform.php">
            <span class="bold"> Evaluate Another Presentation:</span> 
            <select required id="projects" name="project" autocomplete="off">

            </select>
               <input type="hidden" id= "jIDhidden" name="jID" >
               <input type="hidden" id="jNamehidden" name="judgeName" >
               <input type="hidden" id= "sessionhidden" name="session" >
               <input type="hidden" id="roomhidden" name="room" >

            
            <br/>
            <input type="submit" value="Continue to Form">
            <br/>
            <br/>
            <br/>
          <h3> <a href="form.html" class="button">Log out</a> </h3>

          </form>

    
      </div>
    </div>

    <p id="PID" style="display:none;"><?php echo $_POST['PID']; ?></p>
    <p id="C1" style="display:none;"><?php echo $_POST['C1']; ?></p>
    <p id="C2" style="display:none;"><?php echo $_POST['C2']; ?></p>
    <p id="C3" style="display:none;"><?php echo $_POST['C3']; ?></p>
    <p id="C4" style="display:none;"><?php echo $_POST['C4']; ?></p>
    <p id="C5" style="display:none;"><?php echo $_POST['C5']; ?></p>
    <p id="C6" style="display:none;"><?php echo $_POST['C6']; ?></p>
    <p id="C7" style="display:none;"><?php echo $_POST['C7']; ?></p>
    <p id="C8" style="display:none;"><?php echo $_POST['C8']; ?></p> 
</div>
<div id="redirect" style="display:none; ">
         <h3> <a href="form.html" class="button">Invalid information- Return to log in page to enter judge ID and select a presentation</a> </h3>

</div>
    <script src="geturl.js"></script>

    <script src="mappings.js"></script>

    <script>


      var DP1= document.getElementById("DP1").innerHTML;
      var DP2= document.getElementById("DP2").innerHTML;
      var DP3= document.getElementById("DP3").innerHTML;
      var DP4= document.getElementById("DP4").innerHTML;
      var DP5= document.getElementById("DP5").innerHTML;
      var DP6= document.getElementById("DP6").innerHTML;
      var DP7= document.getElementById("DP7").innerHTML;
      var DP8= document.getElementById("DP8").innerHTML;

      var P1= document.getElementById("P1").innerHTML;
      var P2= document.getElementById("P2").innerHTML;
      var P3= document.getElementById("P3").innerHTML;
      var P4= document.getElementById("P4").innerHTML;

      var C1= document.getElementById("C1").innerHTML;
      var C2= document.getElementById("C2").innerHTML;
      var C3= document.getElementById("C3").innerHTML;
      var C4= document.getElementById("C4").innerHTML;
      var C5= document.getElementById("C5").innerHTML;
      var C6= document.getElementById("C6").innerHTML;
      var C7= document.getElementById("C7").innerHTML;
      var C8= document.getElementById("C8").innerHTML;

      console.log(DP1);
      total= parseInt(DP1)+parseInt(DP2)+parseInt(DP3)+parseInt(DP4)+parseInt(DP5)+parseInt(DP6)+parseInt(DP7)+parseInt(DP8)+parseInt(P1)+parseInt(P2)+parseInt(P3)+parseInt(P4)
      console.log(total)

      document.getElementById("total").innerHTML="Total Score Sum: " + total;


      presScores={'DP1':DP1,
      'DP2':DP2,
      'DP3':DP3,
      'DP4':DP4,
      'DP5':DP5,
      'DP6':DP6,
      'DP7':DP7,
      'DP8':DP8,
      'P1':P1,
      'P2':P2,
      'P3':P3,
      'P4':P4,
      'C1':C1,
      'C2':C2,
      'C3':C3,
      'C4':C4,
      'C5':C5,
      'C6':C6,
      'C7':C7,
      'C8':C8,
      'PID': document.getElementById("PID").innerHTML,
      'judgeId': document.getElementById("jID").innerHTML ,
      'judgeName':document.getElementById("jName").innerHTML ,
      'comments': document.getElementById("comments").innerHTML.replace('\'','\'\'')
    };
    console.log(presScores)

    var jID= document.getElementById("jID").innerHTML;
     //redirect if no judge id
     if (jID.includes("Undefined"))
     {
 document.getElementById('formpage').style= "display:none";
 document.getElementById('redirect').style= "display:inline;text-align: center;";

     }
     else{
       document.getElementById('formpage').style= "display:inline";

     }

    var cons= ['C1','C2','C3','C4','C5','C6','C7','C8']
    $.each(cons, function(index, element) {
      if (presScores[element]!="1") {
        presScores[element]= 0;
      }
    })

    console.log(presScores);
    considers="";

    for (var key in presScores) {
      if (presScores.hasOwnProperty(key)) {
        if (document.getElementById(key)){
          document.getElementById(key).innerHTML=presScores[key];
        }
        if (cons.indexOf(key)!=-1){

          if (presScores[key]!=0){
            considers+=formMap[key]+ ", ";
          }
        }             

      }

    }

    if (considers.length>2){
      document.getElementById("consider").innerHTML=considers.substring(0, considers.length-2);
    }
    else{
      document.getElementById("consider").innerHTML=considers;
    }

    //get next presentation
  

    function sendScores(){
      $.ajax({
        type:'POST',
        url:'addScore.php',
        data:presScores,
        success: function(response){
          console.log(response)
          document.getElementById("sendbutton").style="display:none;";

          document.getElementById('success').style= "display:inline";

          document.getElementById('presentations').style= "display:inline";

          document.getElementById('jIDhidden').value= document.getElementById("jID").innerHTML ;
           document.getElementById('jNamehidden').value= document.getElementById("jName").innerHTML;
           // document.getElementById('sessionhidden').value= document.getElementById("session").innerHTML;
           // document.getElementById('roomhidden').value= document.getElementById("room").innerHTML;


            var ds= document.getElementById("session").innerHTML.split('-');
            var dept=ds[0];
            var session=ds[1];

            getPresentations(dept,session);

        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
         alert("some error");
       }
     });
    }



    function getPresentations(dept, sess){
      $.ajax({
        type:'GET',
        url:'getPres.php',
        data:{department:dept, session: sess},
        dataType:'json',
        success: function(response){
          console.log(response)     
          if (response.length>0)  {   

            document.getElementById('presentations').style= "display:inline-block; background: #FFE3C4; padding: 10px;";


            document.getElementById('room').innerHTML= response[0].roomNum;
            document.getElementById('projects').innerHTML=populateList(response);

            document.getElementById('sessionhidden').value= dept + "-" + sess;
            document.getElementById('roomhidden').value= response[0].roomNum;
          }

          else{
            document.getElementById('nopres').style='display:inline';
          }
        }
      });
    }

    function populateList(list){
      console.log("populating")
      var option="";
      $.each(list, function(index, element) {
        var proj= element.pTitle +"-"+ element.PID;
        var line=["<option value=\"", proj, "\">",element.pTitle,"</option>"].join(" ");
        option=option.concat(line, "\n");
      })
      return option;
    }


  </script>

</body>
</html>