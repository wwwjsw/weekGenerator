<?php
	/**
	* WEEK GENERATOR
	*/
	class weekGenerator
	{
		function weekDays($day)
			{
				$ret = '';
				$a = [ 1 => 'Seg' , 2 => 'Ter' , 3 => 'Qua' , 4 => 'Qui' , 5 => 'Sex' , 6 => 'Sab' , 7 => 'Dom' ];
				$b[] = array_slice($a, $day - 1 );
				$b[] = array_slice($a, 0 , $day - 1 );
				$c   = array_merge_recursive( $b[0] , $b[1] );

				foreach ($c as $key => $value) {
					if($key == 0){
						$ret = $ret . "<div class=\"day actual_day\"><a onclick='document.getElementById(\"dia\").value =\"$key\"; document.getElementById(\"weekSearch\").submit()'>Hoje</a></div>";
					}else{
						$ret = $ret . "<div class=\"day\"><a onclick='document.getElementById(\"dia\").value =\"$key\"; document.getElementById(\"weekSearch\").submit()'>$value</a></div>";
					}
				}
				return $ret;		
			}
		function generate($initialDay)
		{
			$html = "<form id='weekSearch' method='post' action=''>";
				$html .= "<input type='hidden' id='dia' name='dia' value=''>";
					$html .= "<div class='week'>";
						$html .= $this->weekDays($initialDay);
					$html .= "</div>";
			$html .= "</form>";
			return $html;
		}
	}
