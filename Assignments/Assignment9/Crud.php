<?php
require 'Pdo_methods.php';

class Crud extends PdoMethods{

	public function getNotes($sdatetime, $edatetime){
		
		/* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
		$pdo = new PdoMethods();

        $sdate = new DateTime($_POST['startdatetime']);
        $edate = new DateTime($_POST['enddatetime']);
        

		/* CREATE THE SQL */
		$sql = "SELECT * FROM timestamps WHERE timestamp >= " . $sdate->getTimestamp() . " AND timestamp <= " . $edate->getTimestamp();

        /*$bindings = [
			[':sdate',$_POST['startdatetime'],'int'],
			[':edate',$_POST['enddatetime'],'int']
		];*/

		//PROCESS THE SQL AND GET THE RESULTS
		$records = $pdo->selectNotBinded($sql);

		/* IF THERE WAS AN ERROR DISPLAY MESSAGE */
		if($records == 'error'){
			return '<p>There has been and error processing your request</p>';
		}
		else {
			if(count($records) != 0){
				{return $this->createRecordsTable($records);}
			}
			else {
				return '<p>no notes found</p>';
			}
		}
	}

	public function addNote(){
	
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO timestamps (timestamp, note) VALUES (:tstamp, :noteinput)";

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
			[':tstamp',$_POST['datetime'],'int'],
			[':noteinput',$_POST['note'],'str']
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error adding the note';
		}
		else {
			return 'Note has been added';
		}
	}

	public function updateNames($post){
		$error = false;

		if(isset($post['inputDeleteChk'])){

			foreach($post['inputDeleteChk'] as $id){
				$pdo = new PdoMethods();

				/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
				$sql = "UPDATE short_names SET first_name = :fname, last_name = :lname, eye_color = :eyecolor, gender = :gender, state = :state WHERE id = :id";

				//THE ^^ WAS USED TO MAKE EACH ITEM UNIQUE BY COMBINING FNAME WITH THEY ID
				$bindings = [
					[':fname', $post["fname^^{$id}"], 'str'],
					[':lname', $post["lname^^{$id}"], 'str'],
					[':eyecolor', $post["color^^{$id}"], 'str'],
					[':gender', $post["gender^^{$id}"], 'str'],
					[':state', $post["state^^{$id}"], 'str'],
					[':id', $id, 'str']
				];

				$result = $pdo->otherBinded($sql, $bindings);

				if($result === 'error'){
					$error = true;
					break;
				}
				
			}

			if($error){
				return "There was an error in updating a name or names";
			}
			else {
				return "All names updated";
			}
		}
		else {
			return "No names selected to update";
		}
	}

	/*public function deleteNames($post){
		$error = false;
		if(isset($post['inputDeleteChk'])){
			foreach($post['inputDeleteChk'] as $id){
				$pdo = new PdoMethods();

				$sql = "DELETE FROM short_names WHERE id=:id";
				
				$bindings = [
					[':id', $id, 'int'],
				];


				$result = $pdo->otherBinded($sql, $bindings);

				if($result === 'error'){
					$error = true;
					break;
				}
			}
			if($error){
				return "There was an error in deleting a name or names";
			}
			else {
				return "All names deleted";
			}

		}
		else {
			return "No names selected to delete";
		}
	}*/

	/*THIS FUNCTION TAKES THE DATA FROM THE DATABASE AND RETURN AN UNORDERED LIST OF THE DATA*/
	/*private function createList($records){
		$list = '<ol>';
		foreach ($records as $row){
			$list .= "<li>Timestamp: {$row['timestamp']} - Eye Color: {$row['eye_color']} - Gender: {$row['gender']} - State: {$row['state']}</li>";
		}
		$list .= '</ol>';
		return $list;
	}*/

	/*THIS FUNCTION TAKES THE DATA AND RETURNS THE DATA IN INPUT ELEMENTS SO IT CAN BE EDITED.  */
	private function createRecordsTable($records){
		$output = "<table class='table table-bordered table-striped'><thead><tr>";
		$output .= "<th>Timestamp</th><th>Note</th><tbody>";
		foreach ($records as $row){
			$output .= "<tr><td><input type='text' name='datetime^^{$row['timestamp']}' value='{$row['timestamp']}'></td>";

			$output .= "<td><input type='text' name='note^^{$row['timestamp']}' value='{$row['note']}'></td>";
		}
		
		$output .= "</tbody></table>";
		return $output;
	}
}