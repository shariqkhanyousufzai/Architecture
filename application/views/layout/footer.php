<div class="app-wrapper-footer">
	<div class="app-footer">
	</div>
</div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>

<!-- customer add modal  -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="add-customer-title">Add Customer</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="main-card mb-3 card">
					<div class="card-body">
						<!-- <h5 class="card-title">Grid Rows</h5> -->
						<form class="">
							<div class="form-row">
								<div class="col-md-6">
									<div class="position-relative form-group"><label for="RaisonSociale" class="">Raison
											Sociale</label><input name="RaisonSociale" id="RaisonSociale"
											placeholder="Name of établissement" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="position-relative form-group"><label for="NomContact" class="">Nom
											Contact</label><input name="NomContact" id="NomContact"
											placeholder="Name of the contact on the établissement" type="text"
											class="form-control">
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6">
									<div class="position-relative form-group"><label for="Poste"
											class="">Poste</label><input name="Poste" id="Poste"
											placeholder="fonction of the contact" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="position-relative form-group"><label for="Department"
											class="">Department</label>
											<select name="Department" id="Department" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                             </select>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-12">
									<div class="position-relative form-group"><label for="Adresse"
											class="">Adresse</label><input name="Adresse" id="Adresse"
											placeholder="Apartment, studio, or floor" type="text" class="form-control">
									</div>
								</div>
							</div>
							
							<div class="form-row">
								<div class="col-md-6">
									<div class="position-relative form-group"><label for="Numéro"
											class="">Numéro</label><input name="Numéro" id="Numéro"
											placeholder="123456789" type="number" class="form-control"></div>
								</div>
								<div class="col-md-6">
									<div class="position-relative form-group"><label for="Email"
											class="">Email</label><input name="Email" id="Email"
											placeholder="abc@abc.com" type="email" class="form-control"></div>
								</div>
								<div class="col-md-6">
									<div class="position-relative form-group"><label for="NomduCommercial" class="">Nom
											du Commercial</label><input name="NomduCommercial" id="NomduCommercial"
											type="text" placeholder="Abc" class="form-control"></div>
								</div>
								<div class="col-md-6">
									<div class="position-relative form-group"><label for="dateDernierAppel"
											class="">Date dernier appel</label><input name="dateDernierAppel"
											id="dateDernierAppel" placeholder="01-03-2020" type="text"
											class="form-control"></div>
								</div>
								<div class="col-md-8">
									<div class="position-relative form-group"><label for="notes" class="">Notes</label>
										<textarea rows="4" cols="50" name="notes" id="notes" form="usrform"></textarea>
									</div>
								</div>
								<div class="col-md-4">
									<div class="position-relative form-group"><label for="secteurD'activité"
											class="">Secteur d'activité</label><input name="secteurD'activité"
											id="secteurD'activité" type="text" class="form-control"></div>
								</div>
							</div>
							<div class="position-relative form-check"><input name="check" id="NRP" type="checkbox"
									class="form-check-input"><label for="NRP" class="form-check-label">NRP</label>
							</div>
							<div class="position-relative form-check"><input name="check" id="RDV" type="checkbox"
									class="form-check-input"><label for="RDV" class="form-check-label">RDV</label>
							</div>
							<div class="position-relative form-check"><input name="check" id="VT" type="checkbox"
									class="form-check-input"><label for="VT" class="form-check-label">VT</label>
							</div>
							<div class="position-relative form-check"><input name="check" id="REFUS" type="checkbox"
									class="form-check-input"><label for="REFUS" class="form-check-label">REFUS</label>
							</div>
							<!-- <button class="mt-2 btn btn-primary">Sign in</button> -->
						</form>
					</div>
				</div>
				<div class="col-md-6 customer-modal">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info">Save</button>
				</div>
			</div>
			<!-- <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div> -->
		</div>
	</div>
</div>

<!-- Edit Customer -->

<!-- customer add modal End -->
<script type="text/javascript" src="<?=$assets?>scripts/main.js"></script>
<script src="<?=$assets?>scripts/map.js"></script>
</body>

</html>