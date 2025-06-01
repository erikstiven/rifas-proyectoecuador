		<div class="text-center position-relative">
			<div class="countdown">
				<h3>Este sorteo juega en</h3>
				<div class="timer display-1 josefin-sans-700" id="timer" time="<?php echo explode(" ", urldecode($raffle->end_date_raffle))[0] ?>">00:00:00</div>
				<p><?php echo urldecode($raffle->location_raffle) ?><br>
					<?php echo TemplateController::formatDate(4, urldecode($raffle->end_date_raffle)) ?><small><span class="px-3">
				</p>
			</div>
		</div>