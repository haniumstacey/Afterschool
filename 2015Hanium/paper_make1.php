<meta charset="utf-8"> <!-- 梨낆뿉���놁쑝�� �쒓� 源⑥쭚 �꾩긽���닿껐�섍린 �꾪빐 ��以꾩쓽 肄붾뱶瑜�異붽��쒕떎. -->

<?PHP include("./functions.inc"); ?>

<html>
<head>
	<style>
	<!--

	<?PHP include( "./paper_common_style.inc" ); ?>

	.ques_head
	{
		/*background-color: #F9E79D;*/
		text-align: center;
	}
	-->
	</style>
</head>
<body>
	<form name="write_form" method="post" action="paper_make1_db.php">
		<center>
			<form name="form1">
			<p><img src ="images/noname01.png" width="54" height="54" border="0" >
				<img src="images/waschool.png" width="209" height="108" border="0" alt="waschool.png">
				<input type="submit" name="login" value="로그인">
			</p>
		</form>
			<table>
				<tr><td><h2>�숈뒿吏��깅줉</h2></td></tr>
				<tr>
					<td class="ques_head"><h4>怨쇰ぉ遺꾨쪟: </h4></td>
					<td class="input_td">
						<select name="papersubject">
							<option>援�뼱</option>
							<option>�섑븰</option>
							<option>�곸뼱</option>
							<option>�ы쉶</option>
							<option>怨쇳븰</option>
							<option>湲고�</option>
						</select>
					</td>
				<tr>
					<td class="ques_head"><h4>�숈뒿吏�챸: </h4></td>
					<td class="input_td">
						<input type="text" name="papername" size="50" maxsize="255">
					</td>
				</tr>
				<tr>
					<td class="ques_head"><h4>臾명빆�� </h4></td>
					<td class="input_td">
						<select name="papertotalqs">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option>29</option>
							<option>30</option>
							<option>31</option>
							<option>32</option>
							<option>33</option>
							<option>34</option>
							<option>35</option>
							<option>36</option>
							<option>37</option>
							<option>38</option>
							<option>39</option>
							<option>40</option>
							<option>41</option>
							<option>42</option>
							<option>43</option>
							<option>44</option>
							<option>45</option>
							<option>46</option>
							<option>47</option>
							<option>48</option>
							<option>49</option>
							<option>50</option>
							<option>51</option>
							<option>52</option>
							<option>53</option>
							<option>54</option>
							<option>55</option>
							<option>56</option>
							<option>57</option>
							<option>58</option>
							<option>59</option>
							<option>60</option>
							<option>61</option>
							<option>62</option>
							<option>63</option>
							<option>64</option>
							<option>65</option>
							<option>66</option>
							<option>67</option>
							<option>68</option>
							<option>69</option>
							<option>70</option>
							<option>71</option>
							<option>72</option>
							<option>73</option>
							<option>74</option>
							<option>75</option>
							<option>76</option>
							<option>77</option>
							<option>78</option>
							<option>79</option>
							<option>80</option>
							<option>81</option>
							<option>82</option>
							<option>83</option>
							<option>84</option>
							<option>85</option>
							<option>86</option>
							<option>87</option>
							<option>88</option>
							<option>89</option>
							<option>90</option>
							<option>91</option>
							<option>92</option>
							<option>93</option>
							<option>94</option>
							<option>95</option>
							<option>96</option>
							<option>97</option>
							<option>98</option>
							<option>99</option>
							<option>100</option>
						</select>
					</td>
				</tr>
								<tr>
					<td class="ques_head"><h4>�쒖��깅줉: </h4></td>
					<td class="input_td">
						<input type="file" name="paperimage" size="50" maxsize="255">
					</td>
				</tr>
								<tr>
					<td class="ques_head"><h4>�숈뒿吏�냼媛� </h4></td>
					<td class="input_td">
						<input type="text" name="paperintro" size="50" maxsize="255">
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width="100">&nbsp;</td>
					<td width="100" align="right"><input type="submit" value="�ㅼ쓬"></td>
				</tr>
			</table>
	</form>	
		<form name="form2">
			<p><img src="images/hone.png" width="48" height="46" border="0" alt="hone.png"> <img src="images/messasge.png" width="51" height="46"
				border="0" alt="messasge.png"> <img src="images/mypage.png" width="49" height="50" border="0" alt="mypage.png"> <img src="images/mileage.png"
				width="50" height="50" border="0" alt="mileage.png"> <img
				src="images/gift.png" width="49" height="50" border="0" alt="gift.png">
			</p>
		</form>
</center>
</body>
</html>