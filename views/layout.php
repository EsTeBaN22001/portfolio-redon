<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Esteban Redón</title>
	<link rel="icon" href="/build/img/logoSmall.webp">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://unpkg.com/scrollreveal"></script>
	<link rel="stylesheet" href="/build/css/app.css">
</head>

<?php 
	$file = basename($_SERVER['PHP_SELF']);
	$page = str_replace('.php', '', $file);
?>

<body class="<?= $page; ?>">

	<!-- <div class="loader" id="loader">
		<div class="lds-facebook">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div> -->
	
	<div id="bg"></div>

	<header class="header">
		<div class="logo-container reveal-right">
			<a href="/">
			<svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 148.92000000000002 44.184" width="148.92000000000002" height="44.184">
				<rect fill="none" stroke="#3A6073" stroke-width="3" width="145.92000000000002" height="41.184" x="1.5" y="1.5"></rect>
				<path class="logoPath" fill="#ffffff" fill-rule="nonzero" d="M4.68 19.37Q3.29 19.37 2.22 18.78Q1.15 18.19 0.58 17.20Q0 16.20 0 15L0 15Q0 13.54 0.84 12.17Q1.68 10.80 3.11 9.88Q4.54 8.95 6.22 8.78L6.22 8.78Q5.30 8.04 4.85 7.04Q4.39 6.05 4.39 4.99L4.39 4.99Q4.39 3.72 5.04 2.57Q5.69 1.42 6.82 0.72Q7.94 0.02 9.34 0.02L9.34 0.02Q10.66 0.02 11.36 0.70Q12.07 1.37 12.07 2.62L12.07 2.62Q12.07 3.48 11.76 4.32Q11.45 5.16 10.99 5.70Q10.54 6.24 10.15 6.24L10.15 6.24Q9.89 6.24 9.65 6.02Q9.41 5.81 9.26 5.47L9.26 5.47Q11.28 3.72 11.28 2.14L11.28 2.14Q11.28 1.39 10.85 0.98Q10.42 0.58 9.58 0.58L9.58 0.58Q7.97 0.58 7.06 1.96Q6.14 3.34 6.14 5.40L6.14 5.40Q6.14 7.82 7.54 9.02L7.54 9.02Q6 9.29 4.79 10.22Q3.58 11.16 2.90 12.47Q2.23 13.78 2.23 15.07L2.23 15.07Q2.23 16.44 2.99 17.50Q3.74 18.55 5.30 18.55L5.30 18.55Q6.53 18.55 7.80 17.84Q9.07 17.14 10.13 15.96Q11.18 14.78 11.83 13.39L11.83 13.39L12.17 13.63Q10.82 16.22 8.90 17.80Q6.98 19.37 4.68 19.37L4.68 19.37ZM13.85 18.50Q12.29 18.50 11.57 17.57Q10.85 16.63 10.85 15.36L10.85 15.36Q10.85 14.40 11.18 14.00Q11.52 13.61 11.92 13.44Q12.31 13.27 12.38 13.20L12.38 13.20Q13.92 11.52 14.76 9.72L14.76 9.72L14.76 9.43Q14.76 8.62 15.04 8.21Q15.31 7.80 15.70 7.80L15.70 7.80Q15.89 7.80 15.98 7.88Q16.08 7.97 16.08 8.11L16.08 8.11Q16.08 8.21 16.01 8.51Q15.94 8.81 15.94 9.17L15.94 9.17Q15.94 9.65 16.07 10.19Q16.20 10.73 16.49 11.59L16.49 11.59Q16.82 12.62 17.00 13.39Q17.18 14.16 17.18 14.95L17.18 14.95Q17.18 15.58 17.04 16.13L17.04 16.13Q17.90 15.98 18.65 15.35Q19.39 14.71 20.06 13.42L20.06 13.42L20.28 13.66Q19.85 14.90 18.96 15.62Q18.07 16.34 16.92 16.51L16.92 16.51Q16.56 17.50 15.74 18Q14.93 18.50 13.85 18.50L13.85 18.50ZM15.53 16.10Q15.62 15.48 15.62 14.98L15.62 14.98Q15.62 14.26 15.50 13.54Q15.38 12.82 15.14 11.88L15.14 11.88Q14.93 10.92 14.88 10.63L14.88 10.63Q13.66 12.65 12.55 13.75L12.55 13.75Q12.94 14.59 13.72 15.24Q14.50 15.89 15.53 16.10L15.53 16.10ZM13.90 17.66Q15 17.66 15.41 16.49L15.41 16.49Q14.45 16.30 13.66 15.73Q12.86 15.17 12.46 14.50L12.46 14.50Q11.93 14.52 11.93 15.34L11.93 15.34Q11.93 16.25 12.47 16.96Q13.01 17.66 13.90 17.66L13.90 17.66ZM21.65 18.38Q19.51 18.38 19.51 16.01L19.51 16.01Q19.51 14.98 19.88 13.45Q20.26 11.93 20.90 10.22L20.90 10.22Q20.33 10.13 20.04 10.03L20.04 10.03L20.04 9.60Q20.90 9.70 21.10 9.70L21.10 9.70Q22.15 6.96 23.36 4.96Q24.58 2.95 25.27 2.95L25.27 2.95Q25.46 2.95 25.62 3.10Q25.78 3.24 25.78 3.48L25.78 3.48Q25.78 3.79 25.48 4.39Q25.18 4.99 24.46 6.24L24.46 6.24Q24.34 6.48 23.71 7.57Q23.09 8.66 22.58 9.77L22.58 9.77L23.47 9.77Q25.46 9.77 26.90 9.62L26.90 9.62L26.90 10.06Q24.29 10.34 22.68 10.34L22.68 10.34L22.32 10.34Q21.00 13.37 21.00 15.58L21.00 15.58Q21.00 16.61 21.31 17.05Q21.62 17.50 22.34 17.50L22.34 17.50Q23.57 17.50 24.77 16.40Q25.97 15.31 26.90 13.39L26.90 13.39L27.22 13.63Q26.33 15.72 24.82 17.05Q23.30 18.38 21.65 18.38L21.65 18.38ZM29.04 18.34Q27.62 18.34 26.87 17.56Q26.11 16.78 26.11 15.55L26.11 15.55Q26.11 14.14 27.05 12.50Q27.98 10.87 29.41 9.76Q30.84 8.64 32.21 8.64L32.21 8.64Q33.70 8.64 33.70 10.10L33.70 10.10Q33.70 11.28 32.81 12.30Q31.92 13.32 30.53 13.97Q29.14 14.62 27.74 14.76L27.74 14.76Q27.65 15.17 27.65 15.62L27.65 15.62Q27.65 16.49 28.08 17.06Q28.51 17.64 29.54 17.64L29.54 17.64Q31.01 17.64 32.50 16.42Q33.98 15.19 34.92 13.39L34.92 13.39L35.21 13.61Q34.25 15.74 32.54 17.04Q30.84 18.34 29.04 18.34L29.04 18.34ZM27.86 14.30Q28.87 13.94 29.98 13.30Q31.08 12.65 31.86 11.77Q32.64 10.90 32.64 9.94L32.64 9.94Q32.64 9.65 32.53 9.52Q32.42 9.38 32.14 9.38L32.14 9.38Q31.39 9.38 30.52 10.13Q29.64 10.87 28.91 12.02Q28.18 13.18 27.86 14.30L27.86 14.30ZM36.67 19.03Q35.45 19.03 34.82 18.23Q34.20 17.42 34.20 16.01L34.20 16.01Q34.20 13.73 35.64 9.91Q37.08 6.10 38.89 3.12Q40.70 0.14 41.66 0.14L41.66 0.14Q42.02 0.14 42.23 0.61Q42.43 1.08 42.43 1.66L42.43 1.66Q42.43 2.78 41.64 4.66Q40.85 6.53 39.58 8.26Q38.30 9.98 36.96 10.80L36.96 10.80Q36.65 11.38 36.23 12.96Q35.81 14.54 35.81 15.86L35.81 15.86Q35.81 18.12 37.13 18.12L37.13 18.12Q37.82 18.12 38.57 17.56Q39.31 16.99 39.77 16.10L39.77 16.10Q38.93 15.67 38.47 14.82Q38.02 13.97 38.02 13.01L38.02 13.01Q38.02 11.88 38.60 11.17Q39.19 10.46 40.03 10.46L40.03 10.46Q40.73 10.46 41.14 11.04Q41.54 11.62 41.54 12.67L41.54 12.67Q41.54 14.26 40.70 15.94L40.70 15.94Q40.99 16.01 41.33 16.01L41.33 16.01Q42.46 16.01 43.14 15.29Q43.82 14.57 44.40 13.39L44.40 13.39L44.69 13.70Q44.06 15.24 43.19 15.84Q42.31 16.44 41.26 16.44L41.26 16.44Q40.85 16.44 40.49 16.37L40.49 16.37Q39.77 17.57 38.81 18.30Q37.85 19.03 36.67 19.03L36.67 19.03ZM37.22 9.86Q38.26 9.05 39.28 7.50Q40.30 5.95 40.96 4.43Q41.62 2.90 41.62 2.28L41.62 2.28Q41.62 2.09 41.52 2.09L41.52 2.09Q41.26 2.09 40.40 3.31Q39.55 4.54 38.64 6.35Q37.73 8.16 37.22 9.86L37.22 9.86ZM40.01 15.62Q40.56 14.45 40.56 13.20L40.56 13.20Q40.56 12.38 40.33 11.89Q40.10 11.40 39.77 11.40L39.77 11.40Q39.41 11.40 39.13 11.90Q38.86 12.41 38.86 13.13L38.86 13.13Q38.86 13.85 39.14 14.54Q39.43 15.24 40.01 15.62L40.01 15.62ZM45.05 18.41Q44.26 18.41 43.76 17.89Q43.27 17.38 43.27 16.42L43.27 16.42Q43.27 15 44.29 13.25Q45.31 11.50 46.87 10.27Q48.43 9.05 49.92 9.05L49.92 9.05Q50.86 9.05 51.48 9.55Q52.10 10.06 52.10 10.85L52.10 10.85Q52.10 11.40 51.79 11.64Q51.48 11.88 50.93 11.88L50.93 11.88Q51.05 11.45 51.05 11.04L51.05 11.04Q51.05 10.44 50.76 10.07Q50.47 9.70 49.87 9.70L49.87 9.70Q48.82 9.70 47.65 10.87Q46.49 12.05 45.71 13.68Q44.93 15.31 44.93 16.49L44.93 16.49Q44.93 17.42 45.58 17.42L45.58 17.42Q46.54 17.42 47.83 15.90Q49.13 14.38 50.62 12.19L50.62 12.19Q50.93 12.24 51.25 12.40Q51.58 12.55 51.58 12.79L51.58 12.79Q51.58 12.98 51.35 13.40Q51.12 13.82 51.07 13.90L51.07 13.90Q50.66 14.59 50.42 15.13Q50.18 15.67 50.18 16.13L50.18 16.13Q50.18 16.54 50.39 16.86Q50.59 17.18 51 17.18L51 17.18Q51.70 17.18 52.75 16.19Q53.81 15.19 54.84 13.39L54.84 13.39L55.08 13.63Q54.58 14.90 53.78 15.90Q52.99 16.90 52.08 17.45Q51.17 18 50.33 18L50.33 18Q49.49 18 49.04 17.51Q48.60 17.02 48.60 16.32L48.60 16.32Q48.60 16.01 48.67 15.62L48.67 15.62Q47.59 17.06 46.74 17.74Q45.89 18.41 45.05 18.41L45.05 18.41ZM62.11 17.76Q61.30 17.76 60.86 17.34Q60.43 16.92 60.43 16.22L60.43 16.22Q60.43 15.91 60.54 15.49Q60.65 15.07 60.77 14.66L60.77 14.66Q60.91 14.23 61.02 13.75Q61.13 13.27 61.13 12.89L61.13 12.89Q61.13 11.71 60.17 11.71L60.17 11.71Q59.26 11.71 58.26 12.67Q57.26 13.63 56.48 14.81Q55.70 15.98 54.72 17.64L54.72 17.64Q54.31 17.64 53.98 17.51Q53.64 17.38 53.45 17.11L53.45 17.11Q53.45 16.99 53.76 16.25L53.76 16.25Q54.36 14.71 54.74 13.45Q55.13 12.19 55.15 11.21L55.15 11.21Q55.32 11.02 55.63 10.86Q55.94 10.70 56.26 10.70L56.26 10.70Q56.90 10.70 56.90 11.33L56.90 11.33Q56.90 11.69 56.69 12.59Q56.47 13.49 56.14 14.50L56.14 14.50Q57.29 12.72 58.58 11.50Q59.88 10.27 61.13 10.27L61.13 10.27Q62.02 10.27 62.46 10.91Q62.90 11.54 62.90 12.43L62.90 12.43Q62.90 12.96 62.77 13.44Q62.64 13.92 62.38 14.54L62.38 14.54Q62.16 15.07 62.04 15.46Q61.92 15.84 61.92 16.22L61.92 16.22Q61.92 17.14 62.64 17.14L62.64 17.14Q63.46 17.14 64.33 16.06Q65.21 14.98 66 13.39L66 13.39L66.26 13.70Q64.54 17.76 62.11 17.76L62.11 17.76ZM82.92 20.18Q82.08 20.18 80.81 18.59Q79.54 16.99 78.28 14.75Q77.02 12.50 76.22 10.63L76.22 10.63Q75.67 12.48 74.93 15.19L74.93 15.19Q74.52 16.73 73.75 19.37L73.75 19.37Q73.13 19.37 72.65 19.02Q72.17 18.67 72.17 18.17L72.17 18.17Q72.17 17.81 72.50 16.85L72.50 16.85Q74.11 11.86 75.46 8.24Q76.80 4.63 78.58 0.60L78.58 0.60Q77.66 0.74 77.00 1.02Q76.34 1.30 75.58 1.70L75.58 1.70Q75.12 1.97 75.00 1.97L75.00 1.97Q74.83 1.97 74.54 1.73Q74.26 1.49 74.26 1.32L74.26 1.32Q77.33 0 79.66 0L79.66 0Q81.14 0 82.54 0.48Q83.93 0.96 84.83 1.97Q85.73 2.98 85.73 4.49L85.73 4.49Q85.73 6.62 84.01 7.79Q82.30 8.95 80.27 9.32Q78.24 9.70 76.78 9.70L76.78 9.70Q77.02 10.13 77.22 10.49Q77.42 10.85 77.59 11.14L77.59 11.14Q78.62 12.98 79.40 14.18Q80.18 15.38 81.35 16.72Q82.51 18.05 84.14 19.39L84.14 19.39Q84 19.70 83.63 19.94Q83.26 20.18 82.92 20.18L82.92 20.18ZM76.61 9.31Q78.50 9.19 80.21 8.59Q81.91 7.99 83.02 6.84Q84.12 5.69 84.12 3.98L84.12 3.98Q84.12 2.16 82.88 1.33Q81.65 0.50 79.82 0.50L79.82 0.50Q78.38 3.38 76.61 9.31L76.61 9.31ZM87.50 18.34Q86.09 18.34 85.33 17.56Q84.58 16.78 84.58 15.55L84.58 15.55Q84.58 14.14 85.51 12.50Q86.45 10.87 87.88 9.76Q89.30 8.64 90.67 8.64L90.67 8.64Q92.16 8.64 92.16 10.10L92.16 10.10Q92.16 11.28 91.27 12.30Q90.38 13.32 88.99 13.97Q87.60 14.62 86.21 14.76L86.21 14.76Q86.11 15.17 86.11 15.62L86.11 15.62Q86.11 16.49 86.54 17.06Q86.98 17.64 88.01 17.64L88.01 17.64Q89.47 17.64 90.96 16.42Q92.45 15.19 93.38 13.39L93.38 13.39L93.67 13.61Q92.71 15.74 91.01 17.04Q89.30 18.34 87.50 18.34L87.50 18.34ZM86.33 14.30Q87.34 13.94 88.44 13.30Q89.54 12.65 90.32 11.77Q91.10 10.90 91.10 9.94L91.10 9.94Q91.10 9.65 91.00 9.52Q90.89 9.38 90.60 9.38L90.60 9.38Q89.86 9.38 88.98 10.13Q88.10 10.87 87.37 12.02Q86.64 13.18 86.33 14.30L86.33 14.30ZM94.32 18Q93.62 18 93.07 17.48Q92.52 16.97 92.52 15.98L92.52 15.98Q92.52 14.66 93.53 12.90Q94.54 11.14 96.05 9.89Q97.56 8.64 98.98 8.64L98.98 8.64Q100.03 8.64 100.03 9.38L100.03 9.38Q100.03 9.48 99.98 9.72L99.98 9.72Q99.74 9.36 99.07 9.36L99.07 9.36Q97.87 9.36 96.74 10.50Q95.62 11.64 94.91 13.18Q94.20 14.71 94.20 15.70L94.20 15.70Q94.20 16.22 94.43 16.54Q94.66 16.85 95.06 16.85L95.06 16.85Q95.71 16.85 96.65 16.02Q97.58 15.19 98.54 13.68Q99.50 12.17 100.25 10.25L100.25 10.25Q102.12 5.40 103.38 2.70Q104.64 0 105.50 0L105.50 0Q105.70 0 105.84 0.16Q105.98 0.31 105.98 0.55L105.98 0.55Q105.98 0.91 105.60 1.79Q105.22 2.66 104.35 4.49L104.35 4.49Q102.58 8.18 101.52 10.88Q100.46 13.58 100.46 15.60L100.46 15.60Q100.46 16.39 100.55 16.67Q100.63 16.94 101.02 16.94L101.02 16.94Q101.52 16.94 102.20 16.50Q102.89 16.06 103.56 15.25Q104.23 14.45 104.71 13.39L104.71 13.39L105 13.61Q104.54 14.81 103.75 15.79Q102.96 16.78 102.06 17.34Q101.16 17.90 100.34 17.90L100.34 17.90Q99.53 17.90 99.14 17.38Q98.76 16.85 98.76 16.10L98.76 16.10Q98.76 15.29 99.22 13.54L99.22 13.54Q97.99 15.55 96.68 16.78Q95.38 18 94.32 18L94.32 18ZM105.91 18.05Q104.93 18.05 104.47 17.45Q104.02 16.85 104.02 15.86L104.02 15.86Q104.02 14.88 104.42 13.80Q104.83 12.72 105.48 12Q106.13 11.28 106.78 11.28L106.78 11.28Q106.99 11.28 107.28 11.40L107.28 11.40Q106.99 11.64 106.58 12.46Q106.18 13.27 105.88 14.20Q105.58 15.12 105.58 15.70L105.58 15.70Q105.58 17.06 106.44 17.06L106.44 17.06Q106.94 17.06 107.64 16.54Q108.34 16.01 109.01 15.14L109.01 15.14Q108.34 14.59 107.96 13.70Q107.59 12.82 107.59 11.86L107.59 11.86Q107.59 10.61 108.23 9.72Q108.86 8.83 109.94 8.83L109.94 8.83Q110.86 8.83 111.23 9.32Q111.60 9.82 111.60 10.68L111.60 10.68Q111.60 11.59 111.16 12.73Q110.71 13.87 109.99 14.95L109.99 14.95Q110.42 15.19 110.90 15.19L110.90 15.19Q111.60 15.19 112.34 14.77Q113.09 14.35 113.47 13.46L113.47 13.46L113.76 13.70Q113.30 14.76 112.46 15.26Q111.62 15.77 110.74 15.77L110.74 15.77Q110.09 15.77 109.58 15.53L109.58 15.53Q108.72 16.66 107.75 17.35Q106.78 18.05 105.91 18.05L105.91 18.05ZM109.44 14.52Q110.06 13.58 110.45 12.61Q110.83 11.64 110.83 10.82L110.83 10.82Q110.83 10.15 110.63 9.82Q110.42 9.48 110.11 9.48L110.11 9.48Q109.78 9.48 109.43 9.80Q109.08 10.13 108.85 10.69Q108.62 11.26 108.62 11.93L108.62 11.93Q108.62 12.67 108.83 13.36Q109.03 14.04 109.44 14.52L109.44 14.52ZM110.76 7.10Q110.59 7.03 110.51 6.83Q110.42 6.62 110.42 6.48L110.42 6.48Q110.42 6.19 110.87 5.46Q111.31 4.73 111.90 4.15Q112.49 3.58 112.92 3.58L112.92 3.58Q113.38 3.58 113.45 4.32L113.45 4.32Q111.67 5.86 110.76 7.10L110.76 7.10ZM120.77 17.76Q119.95 17.76 119.52 17.34Q119.09 16.92 119.09 16.22L119.09 16.22Q119.09 15.91 119.20 15.49Q119.30 15.07 119.42 14.66L119.42 14.66Q119.57 14.23 119.68 13.75Q119.78 13.27 119.78 12.89L119.78 12.89Q119.78 11.71 118.82 11.71L118.82 11.71Q117.91 11.71 116.92 12.67Q115.92 13.63 115.14 14.81Q114.36 15.98 113.38 17.64L113.38 17.64Q112.97 17.64 112.63 17.51Q112.30 17.38 112.10 17.11L112.10 17.11Q112.10 16.99 112.42 16.25L112.42 16.25Q113.02 14.71 113.40 13.45Q113.78 12.19 113.81 11.21L113.81 11.21Q113.98 11.02 114.29 10.86Q114.60 10.70 114.91 10.70L114.91 10.70Q115.56 10.70 115.56 11.33L115.56 11.33Q115.56 11.69 115.34 12.59Q115.13 13.49 114.79 14.50L114.79 14.50Q115.94 12.72 117.24 11.50Q118.54 10.27 119.78 10.27L119.78 10.27Q120.67 10.27 121.12 10.91Q121.56 11.54 121.56 12.43L121.56 12.43Q121.56 12.96 121.43 13.44Q121.30 13.92 121.03 14.54L121.03 14.54Q120.82 15.07 120.70 15.46Q120.58 15.84 120.58 16.22L120.58 16.22Q120.58 17.14 121.30 17.14L121.30 17.14Q122.11 17.14 122.99 16.06Q123.86 14.98 124.66 13.39L124.66 13.39L124.92 13.70Q123.19 17.76 120.77 17.76L120.77 17.76Z" transform="translate(12.001 12)"></path>
			</svg>
			</a>
		</div>
		<div class="menu-icon">
			<i class="fa-solid fa-bars"></i>
		</div>
		<nav class="nav">
			<ul>
				<li><a href="/about-us">Acerca de</a></li>
				<li><a href="/proyects">Proyectos</a></li>
				<li><a href="/contact">Contáctame</a></li>
			</ul>
		</nav>
	</header>

	<?php echo $content; ?>

	<footer class="footer">
		<div class="container footer-container">
			<div class="contact reveal-vertical1">
				<h3 class="titleSeparator">&lt;Enlaces de contacto/&gt;</h3>
				<div class="contact-group">
					<a href="#">
						<i class="fas fa-phone-square-alt"></i>
						<p>2664552752</p>
					</a>
				</div>
				<div class="contact-group">
					<a href="#">
						<i class="fas fa-envelope"></i>
						<p>esteban1.redon2@gmail.com</p>
					</a>
				</div>
				<div class="contact-group">
					<a href="https://www.linkedin.com/in/esteban-redon-194928217/" target="_blank">
						<i class="fa-brands fa-linkedin"></i>
						<p>LinkedIn</p>
					</a>
				</div>
			</div>
			<div class="other-pages reveal-vertical2">
				<h3>&lt;Otras páginas/&gt;</h3>
				<ul class="navFooter">
					<li><a href="/">Inicio</a><span>Ir al inicio</span></li>
					<li><a href="/about-us">Acerca de</a><span>Saber más sobre mi</span></li>
					<li><a href="/proyects">Proyectos</a><span>Ver mis proyectos</span></li>
					<li><a href="/contact">Contáctame</a><span>Ponte en contacto conmigo.</span></li>
				</ul>
			</div>
		</div>
		<div class="copyright">
			<p>&copy; Todos los derechos reservados por Esteban-Redón 2022</p>
		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha512-yFjZbTYRCJodnuyGlsKamNE/LlEaEAxSUDe5+u61mV8zzqJVFOH7TnULE2/PP/l5vKWpUNnF4VGVkXh3MjgLsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="/build/js/customScrollReveal-index.js"></script>
	<script src="/build/js/app.js"></script>
	<?php echo $script ?? ''; ?>
	
</body>
</html>