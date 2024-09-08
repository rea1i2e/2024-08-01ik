<form id="registration-form" class="registration-form" action="mail.php" method="post">
	<section class="form-content-wrapper">
		<!-- <h1 class="form-title">無料の転職サポートに簡単登録</h1> -->

		<div class="form-content">
			<div class="horizontal-scroll-wrapper">
				<div id="step1" class="horizontal-scroll-item">
					<label class="form-label require-item">希望雇用形態</label>
					<div class="radio-wrapper">
						<input type="radio" name="desired_employment_form" value="正社員" id="desired_employment_form1" tabindex="0">
						<label for="desired_employment_form1" class="radio">正社員</label>

						<input type="radio" name="desired_employment_form" value="パート" id="desired_employment_form2" tabindex="0">
						<label for="desired_employment_form2" class="radio">パート</label>

						<input type="radio" name="desired_employment_form" value="その他" id="desired_employment_form3" tabindex="0">
						<label for="desired_employment_form3" class="radio">その他</label>
					</div>
					<label class="form-label require-item">希望転職時期</label>
					<div class="radio-wrapper">
						<input type="radio" name="desired_job_change_season" value="３ヶ月以内" id="desired_job_change_season1" tabindex="0">
						<label for="desired_job_change_season1" class="radio">３ヶ月以内</label>

						<input type="radio" name="desired_job_change_season" value="６ヶ月以内" id="desired_job_change_season2" tabindex="0">
						<label for="desired_job_change_season2" class="radio">６ヶ月以内</label>

						<input type="radio" name="desired_job_change_season" value="１年以内" id="desired_job_change_season3" tabindex="0">
						<label for="desired_job_change_season3" class="radio">１年以内</label>
					</div>
				</div>

				<div id="step2" class="horizontal-scroll-item">
					<label class="form-label require-item">お名前</label>
					<input type="text" name="applicant_name" class="form-text-box" placeholder="例）薬剤花子" tabindex="-1">

					<label class="form-label require-item">ふりがな</label>
					<input type="text" name="furigana" class="form-text-box" placeholder="例）やくざいはなこ" tabindex="-1">

					<label class="form-label require-item">電話番号</label>
					<input type="tel" name="telephone_number" class="form-text-box" placeholder="例）08012345678" tabindex="-1">
				</div>

				<div id="step3" class="horizontal-scroll-item">
					<label class="form-label any-item">メールアドレス</label>
					<input type="email" name="email_address" class="form-text-box" placeholder="例）yakuzaihanako@xx.ne.jp" tabindex="-1">

					<label class="form-label any-item">希望勤務地</label>
					<div class="form-select-box-wrapper">
						<select class="form-select-box" name="desired_workplace" tabindex="-1">
							<option value='' selected>選択してください</option>
							<option value="北海道">北海道</option>
							<option value="青森県">青森県</option>
							<option value="岩手県">岩手県</option>
							<option value="宮城県">宮城県</option>
							<option value="秋田県">秋田県</option>
							<option value="山形県">山形県</option>
							<option value="福島県">福島県</option>
							<option value="茨城県">茨城県</option>
							<option value="栃木県">栃木県</option>
							<option value="群馬県">群馬県</option>
							<option value="埼玉県">埼玉県</option>
							<option value="千葉県">千葉県</option>
							<option value="東京都">東京都</option>
							<option value="神奈川県">神奈川県</option>
							<option value="新潟県">新潟県</option>
							<option value="富山県">富山県</option>
							<option value="石川県">石川県</option>
							<option value="福井県">福井県</option>
							<option value="山梨県">山梨県</option>
							<option value="長野県">長野県</option>
							<option value="岐阜県">岐阜県</option>
							<option value="静岡県">静岡県</option>
							<option value="愛知県">愛知県</option>
							<option value="三重県">三重県</option>
							<option value="滋賀県">滋賀県</option>
							<option value="京都府">京都府</option>
							<option value="大阪府">大阪府</option>
							<option value="兵庫県">兵庫県</option>
							<option value="奈良県">奈良県</option>
							<option value="和歌山県">和歌山県</option>
							<option value="鳥取県">鳥取県</option>
							<option value="島根県">島根県</option>
							<option value="岡山県">岡山県</option>
							<option value="広島県">広島県</option>
							<option value="山口県">山口県</option>
							<option value="徳島県">徳島県</option>
							<option value="香川県">香川県</option>
							<option value="愛媛県">愛媛県</option>
							<option value="高知県">高知県</option>
							<option value="福岡県">福岡県</option>
							<option value="佐賀県">佐賀県</option>
							<option value="長崎県">長崎県</option>
							<option value="熊本県">熊本県</option>
							<option value="大分県">大分県</option>
							<option value="宮崎県">宮崎県</option>
							<option value="鹿児島県">鹿児島県</option>
							<option value="沖縄県">沖縄県</option>
						</select>
					</div>

					<label class="form-label any-item">その他の希望条件等</label>
					<textarea name="other" class="form-text-area" placeholder="条件、連絡を希望する時間帯、ご質問など、ご自由にご記入ください。" tabindex="-1"></textarea>

					<input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source'] ?>">
					<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium'] ?>">
					<input type="hidden" name="utm_term" value="<?php echo $_GET['utm_term'] ?>">
					<input type="hidden" name="utm_content" value="<?php echo $_GET['utm_content'] ?>">
					<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign'] ?>">

					<div class="terms-link-wrapper">
						利用規約および個人情報の取扱いについては
						<a href="https://pharmacareer.jp/tos/" class="terms-link" target="_blank" tabindex="-1">こちら</a>
					</div>

				</div>

			</div>
		</div>

		<div class="button-wrapper">
			<button type="button" class="form-button prev" tabindex="0">戻る</button>
			<button type="button" class="form-button next" tabindex="0">次へ &#9654;</button>
			<button type="button" class="form-button submit" tabindex="0">規約に同意して登録</button>
		</div>
		<div class="form-step">
			<div class="form-step-label">ステップ</div>
			<div id="step-1" class="form-step-item current">1</div>
			<div id="step-2" class="form-step-item">2</div>
			<div id="step-3" class="form-step-item">3</div>
		</div>
	</section>
</form>