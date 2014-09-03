<?php
$year=$_POST["year"];
$query="SELECT AVG(english) FROM kcpe_results WHERE year='$year'";
$result=mysqli_query($conn, $query);
while($total_results=mysqli_fetch_assoc($result)){
	$tenglish=$total_results['AVG(english)'];
	echo "<font color=\"blue\">".$tenglish."</font>";
}
?></td>
<?php echo "<td>"?>
	<?php
	$year=$_POST["year"];
	$query="SELECT AVG(kiswahili) FROM kcpe_results WHERE year='$year'";
	$result=mysqli_query($conn, $query);
	while($total_results=mysqli_fetch_assoc($result)){
		$tkiswahili=$total_results['AVG(kiswahili)'];
		echo "<font color=\"blue\">".$tkiswahili."</font>";
	}

	?></td>
	<?php echo "<td>"?>
		<?php
		$year=$_POST["year"];
		$query="SELECT AVG(mathematics) FROM kcpe_results WHERE year='$year'";
		$result=mysqli_query($conn, $query);
		while($total_results=mysqli_fetch_assoc($result)){
			$tmaths=$total_results['AVG(mathematics)'];
			echo "<font color=\"blue\">".$tmaths."</font>";
		}
		?></td>
		<?php echo "<td>"?>
			<?php
			$year=$_POST["year"];
			$query="SELECT AVG(science) FROM kcpe_results WHERE year='$year'";
			$result=mysqli_query($conn, $query);
			while($total_results=mysqli_fetch_assoc($result)){
				$tscience=$total_results['AVG(science)'];
				echo "<font color=\"blue\">".$tscience."</font>";
			}
			?></td>
			<?php echo "<td>"?>
				<?php
				$year=$_POST["year"];
				$query="SELECT AVG(social_studies) FROM kcpe_results WHERE year='$year'";
				$result=mysqli_query($conn, $query);
				while($total_results=mysqli_fetch_assoc($result)){
					$tsstudies=$total_results['AVG(social_studies)'];
					echo "<font color=\"blue\">".$tsstudies."</font>";
				}
				?></td>
				<?php echo "<td>"?>
					<?php
					$year=$_POST["year"];
					$query="SELECT AVG(total_marks) FROM kcpe_results WHERE year='$year'";
					$result=mysqli_query($conn, $query);
					while($total_results=mysqli_fetch_assoc($result)){
						$total_marks=$total_results['AVG(total_marks)'];
						echo "<font color=\"blue\">".$total_marks."</font>";
					}
					?>