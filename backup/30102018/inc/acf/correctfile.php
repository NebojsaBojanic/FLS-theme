	<?php 
		$file_parts = pathinfo($url);

		switch($file_parts['extension'])
		{
		/* PDF File */

			case "pdf": ?>
				<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
				<p>Download PDF File</p>
			<?php break;

		/* Word Text File */

			case "doc": ?>
				<i class="fa fa-file-word-o" aria-hidden="true"></i>
				<p>Download Word Document</p>
			<?php break;

			case "docx": ?>
				<i class="fa fa-file-word-o" aria-hidden="true"></i>
				<p>Download Word Document</p>
			<?php break;

		/* Excel Tables */

			case "xls": ?>
				<i class="fa fa-file-excel-o" aria-hidden="true"></i>
				<p>Download Excel Table</p>
			<?php break;

			case "xlsx": ?>
				<i class="fa fa-file-excel-o" aria-hidden="true"></i>
				<p>Download Excel Table</p>
			<?php break;

		/* Power Point */

			case "ppt": ?>
				<i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>
				<p>Download Excel Table</p>
			<?php break;

			case "pps": ?>
				<i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>
				<p>Download Excel Table</p>
			<?php break;

			case "pptx": ?>
				<i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>
				<p>Download Excel Table</p>
			<?php break;

			case "ppsx": ?>
				<i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>
				<p>Download Excel Table</p>
			<?php break;

		/* Text File */

			case "txt": ?>
				<i class="fa fa-file-text-o" aria-hidden="true"></i>
				<p>Download Text Document</p>
			<?php break;

		/* Other Situations */

			case "": // Handle file extension for files ending in '.' ?>
				<p>Incorrect File!<br>File don't have any extension, finishing with "."</p>
			<?php break;
			case NULL: // Handle no file extension?>
				<p>Incorrect File!<br>File don't have any extension.</p>
			<?php break;
			default: ?>
				<p>Incorrect File Extension!<br>Please upload PDF, Word, Text or Excel file.</p>
			<?php break;
		}
	?>