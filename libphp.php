<?php
class libphp {
	/*
	 * array(array) type 의 input 을 array(array) type 으로 transpose 후 return
	 * @param : $m (array(array))
	 * @return : array(array)
	 */
	public function transpose($m) {
		// result array x array 의 size 미리 정해짐
		$i_rowcnt = count($m);
		$i_colcnt = 0;
		foreach($m[0] as $k=>$v) {
			$i_colcnt++;
		}
		$result = array_fill(0,$i_colcnt,array());
		for($i=0;$i<count($result);$i++) {
			$result[$i] = array_fill(0,$i_rowcnt,0);
		}
		
		foreach($m as $ri=>$row) {
			$colcnt = count($row);
			for($ci=0;$ci<$colcnt;$ci++) {
				$v = $row[$ci];
				$result[$ci][$ri] = $v;
			}
		}
		return $result;
	}
	
	/*
	 * @param : $m (array(array))
	 * @return : html string
	 */
	public function draw_html_matrix ($m) {
		$html = "<table>\n";
		foreach($m as $row) {
			$html .= "<tr>";
			foreach($row as $col) {
				$html .= "<td>$col</td>";
			}
			$html .= "</tr>\n";
		}
		$html .= "</table>\n";
		return $html;
	}
}
?>