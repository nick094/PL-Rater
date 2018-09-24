@extends('layout')

<div class="container">
	<div class="block ">
		<h1 class="title ">Submission List</h1>
	</div>
	<div class="block">
		<p class="content"><i>Quote/pricing will follow within 24 hours</i></p>
	</div>
	<div class="block">
		<button class="button is-primary is-outlined">Submit</button>
	</div>
	<div class="columns">
		 
	<div class="column is-half is-offset-one-quarter">
		<div class="block">
			<p class="subtitle">Agent info</p>
			<form action="/subs/create" method="POST">
				{{ csrf_field() }}
				<div class="field">
					<label class="label" for="agent_name">
						Agent Name
					</label>
					<input type="text" class="input" placeholder="Your name here" id="agent_name">
				</div>

				<div class="field">
					<label class="label" for="agency_name">
						Agency name
					</label>
					<input type="text" class="input" placeholder="Your name here" id="agency_name">
				</div>

				<div class="field">
					<label class="label" for="agent_email_address">
						Agent email address
					</label>
					<input type="email" class="input" placeholder="Your name here" id="agent_email_address">
				</div>

				<div class="field">
					<label class="label" for="agent_phone_number">
						Agent phone number
					</label>
					<input type="email" class="input" placeholder="Your name here" id="agent_phone_number">
				</div>

				<div class="field">
					<label class="label" for="type_of_coverage">
						Type of Coverage
					</label>
					<input type="text" class="input" placeholder="Your name here" id="type_of_coverage">
				</div>

				<div class="field">
					<label class="label" for="lob">
						LOB
					</label>
					<input type="text" class="input" placeholder="Your name here" id="lob">
				</div>

				<div class="field">
					<label class="label" for="effective_date">
						Effective date
					</label>
					<input type="date" class="input" placeholder="Your name here" id="effective_date">
				</div>

				<p class="subtitle">Insured info</p>
				<hr>
				<div class="field">
					<label class="label" for="named_insured">
						Named Insured
					</label>
					<input type="text" class="input" placeholder="Your name here" id="named_insured">
				</div>

				<div class="field">
					<label class="label" for="mailing_address">
						Mailing address
					</label>
					<input type="text" class="input" placeholder="Your name here" id="mailing_address">
				</div>

				<div class="field">
					<label class="label" for="street_name_and_number">
						Street name/number
					</label>
					<input type="text" class="input" placeholder="Your name here" id="street_name_and_number">
				</div>

				<div class="field">
					<label class="label" for="city">
						City
					</label>
					<input type="text" class="input" placeholder="Your name here" id="city">
				</div>

				<div class="field">
					<label class="label" for="county">
						County
					</label>
					<input type="text" class="input" placeholder="Your name here" id="county">
				</div>

				<div class="field">
					<label class="label" for="state">
						State
					</label>
					<input type="text" class="input" placeholder="Your name here" id="state">
				</div>

				<div class="field">
					<label class="label" for="phone_number">
						Phone number
					</label>
					<input type="text" class="input" placeholder="Your name here" id="phone_number">
				</div>

				<div class="field">
					<label class="label" for="email_address">
						Email Address
					</label>
					<input type="text" class="input" placeholder="Your name here" id="email_address">
				</div>

				<div class="field">
					<label class="label" for="cov_a">
						Coverage A
					</label>
					<input type="text" class="input" placeholder="Your name here" id="cov_a">
				</div>

				<div class="field">
					<label class="label" for="other_structures">
						Other Structures
					</label>
					<input type="text" class="input" placeholder="Your name here" id="other_structures">
				</div>

				<div class="field">
					<label class="label" for="loss_of_use">
						Loss Of Use
					</label>
					<input type="text" class="input" placeholder="Your name here" id="loss_of_use">
				</div>

				<div class="field">
					<label class="label" for="med_pay">
						Med Pay
					</label>
					<input type="text" class="input" placeholder="Your name here" id="med_pay">
				</div>

				<div class="field">
					<label class="label" for="aop_ded">
						AOP Deductible
					</label>
					<input type="text" class="input" placeholder="Your name here" id="aop_ded">
				</div>

			<hr>

				<div class="field">
					<label class="label" for="construction_type">
						Construction type
					</label>
					<input type="text" class="input" placeholder="Your name here" id="construction_type">
				</div>

				<div class="field">
					<label class="label" for="protection_class">
						Protection class
					</label>
					<input type="text" class="input" placeholder="Your name here" id="protection_class">
				</div>

				<div class="field">
					<label class="label" for="new_purchase">
						New purchase
					</label>
					<input type="text" class="input" placeholder="Your name here" id="new_purchase">
				</div>

				<div class="field">
					<label class="label" for="prior_carrier">
						Prior carrier
					</label>
					<input type="text" class="input" placeholder="Your name here" id="prior_carrier">
				</div>

				<div class="field">
					<label class="label" for="prior_carrier_name">
						Prior carrier's name
					</label>
					<input type="text" class="input" placeholder="Your name here" id="prior_carrier_name">
				</div>

				<div class="field">
					<label class="label" for="prior_carrier_effective_date">
						Prior carrier eff date
					</label>
					<input type="date" class="input" placeholder="Your name here" id="prior_carrier_effective_date">
				</div>
				<div class="block">
					<button class="button is-primary is-outlined">Submit</button>
				</div>
			
		</div>

		<!--	<div class="field">
				<label class="label">
					Dropdown
				</label>
				<p class="control">
				<span class="select">
					<select>
						<option>One</option>
						<option>Two</option>
					</select>
					</span>
				</p>
			</div> 


		<div class="block">
			<div class="field has-addons">
				<p class="control">
					<input type="text" class="input" placeholder="Enter your keywords"></input>
				</p>
				<p class="control">
					<a href="" class="button is-info">Search</a>
				</p>
						</div>
					</div>
				</div>
			</div>
 -->
				<div class="block">
					<div class="notification">
						<div class="delete"></div>
							For more accurate pricing, please provide us with all information available!
					</div>
				</div>
					<div class="columns">
					 <div class="column is-half is-offset-one-quarter">
				<div class="field is-grouped is-grouped-centered">
				  <p class="control">
				    <a class="button is-primary">
				      Submit
				    </a>
				  </p>
	  </form>			
				  <p class="control">
				    <a class="button is-light">
				      Cancel
				    </a>
				  </p>
				</div>
			</div>
		</div>
	</div>
</div>