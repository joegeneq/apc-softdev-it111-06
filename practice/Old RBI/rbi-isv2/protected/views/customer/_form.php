<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_firstname'); ?>
		<?php echo $form->textField($model,'cus_firstname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cus_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_lastname'); ?>
		<?php echo $form->textField($model,'cus_lastname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cus_lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_address'); ?>
		<?php echo $form->textField($model,'cus_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cus_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_contact_no'); ?>
		<?php echo $form->textField($model,'cus_contact_no',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cus_contact_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_email'); ?>
		<?php echo $form->textField($model,'cus_email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cus_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_type'); ?>
		<?php echo $form->dropDownList($model, 'cus_type', 
		array('prompt'=>'Select customer type', 'Individual' => 'Individual', 'Company' => 'Company')
		); ?>
		<?php echo $form->error($model,'cus_type'); ?>	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_country'); ?>
		<?php echo $form->dropDownList($model,'cus_country',
		array('prompt' => 'Select a country',
		'Afghanistan' => 'Afghanistan',
'Aland Islands' => 'Aland Islands',
'Albania'=> 'Albania',
'Algeria' => 'Algeria',
'American Samoa' => 'American Samoa',
'Andorra' => 'Andorra',
'Angola' => 'Angola',
'Anguilla' => 'Anguilla',
'Antarctica' => 'Antarctica',
'Antigua and Barbuda' => 'Antigua and Barbuda',
'Argentina' => 'Argentina',
'Armenia' => 'Armenia',
'Aruba' => 'Aruba',
'Australia' => 'Australia',
'Austria' => 'Austria',
'Azerbaijan' => 'Azerbaijan',
'Bahamas' => 'Bahamas',
'Bahrain' => 'Bahrain',
'Bangladesh' => 'Bangladesh',
'Barbados' => 'Barbados',
'Belarus' => 'Belarus',
'Belgium' => 'Belgium',
'Belize' => 'Belize',
'Benin' =>'Benin',
'Bermuda'=>'Bermuda',
'Bhutan'=>'Bhutan',
'Bolivia'=>'Bolivia',
'Bosnia and Herzegovina'=>'Bosnia and Herzegovina',
'Botswana'=>'Botswana',
'Bouvet Island'=>'Bouvet Island',
'Brazil'=>'Brazil',
'British Indian Ocean Territory'=>'British Indian Ocean Territory',
'Brunei Darussalam' => 'Brunei Darussalam',
'Bulgaria' => 'Bulgaria',
'Burkina Faso' => 'Burkina Faso',
'Burundi' => 'Burundi',
'Cambodia' => 'Cambodia',
'Cameroon' => 'Cameroon',
'Canada' => 'Canada',
'Cape Verde' => 'Cape Verde',
'Cayman Islands' => 'Cayman Islands',
'Central African Republic' => 'Central African Republic',
'Chad' => 'Chad',
'Chile' => 'Chile',
'China' => 'China',
'Christmas Island' => 'Christmas Island',
'Cocos (Keeling) Islands' => 'Cocos (Keeling) Islands',
'Colombia' => 'Colombia',
'Comoros' => 'Comoros',
'Congo' => 'Congo',
'Congo, The Democratic Republic of The' => 'Congo, The Democratic Republic of The',
'Cook Islands' => 'Cook Islands',
'Costa Rica' => 'Costa Rica',
'Cote D"ivoire' => 'Cote D"ivoire',
'Croatia' => 'Croatia',
'Cuba'=> 'Cuba',
'Cyprus'=> 'Cyprus',
'Czech Republic' => 'Czech Republic',
'Denmark' => 'Denmark',
'Djibouti' => 'Djibouti',
'Dominica' => 'Dominica',
'Dominican Republic' => 'Dominican Republic',
'Ecuador' => 'Ecuador',
'Egypt' => 'Egypt',
'El Salvador'=> 'El Salvador',
'Equatorial Guinea'=> 'Equatorial Guinea',
'Eritrea'=> 'Eritrea',
'Estonia' => 'Estonia',
'Ethiopia' => 'Ethiopia',
'Falkland Islands (Malvinas)' => 'Falkland Islands (Malvinas)',
'Faroe Islands' => 'Faroe Islands',
'Fiji' => 'Fiji',
'Finland' => 'Finland',
'France'=> 'France',
'French Guiana'=> 'French Guiana',
'French Polynesia' => 'French Polynesia',
'French Southern Territories' => 'French Southern Territories',
'Gabon' => 'Gabon',
'Gambia' => 'Gambia',
'Georgia' => 'Georgia',
'Germany' => 'Germany',
'Ghana' => 'Ghana',
'Gibraltar' => 'Gibraltar',
'Greece' => 'Greece',
'Greenland' => 'Greenland',
'Grenada' => 'Grenada',
'Guadeloupe' => 'Guadeloupe',
'Guam' => 'Guam',
'Guatemala' => 'Guatemala',
'Guernsey' => 'Guernsey',
'Guinea' => 'Guinea',
'Guinea-bissau' => 'Guinea-bissau',
'Guyana' => 'Guyana',
'Haiti' => 'Haiti',
'Heard Island and Mcdonald Islands' => 'Heard Island and Mcdonald Islands',
'Holy See (Vatican City State)' => 'Holy See (Vatican City State)',
 'Honduras' => 'Honduras',
'Hong Kong' => 'Hong Kong',
'Hungary' => 'Hungary',
'Iceland' => 'Iceland',
'India' => 'India',
'Indonesia' => 'Indonesia',
'Iran, Islamic Republic of' => 'Iran, Islamic Republic of',
'Iraq' => 'Iraq',
'Ireland' => 'Ireland',
'Isle of Man' => 'Isle of Man',
'Israel' => 'Israel',
'Italy' => 'Italy',
'Jamaica' => 'Jamaica',
'Japan' => 'Japan',
'Jersey' => 'Jersey',
'Jordan' => 'Jordan',
'Kazakhstan' => 'Kazakhstan',
'Kenya' => 'Kenya',
'Kiribati' => 'Kiribati',
'Korea, Democratic People"s Republic of' => 'Korea, Democratic People"s Republic of',
'Korea, Republic of' => 'Korea, Republic of',
'Kuwait' => 'Kuwait',
'Kyrgyzstan' => 'Kyrgyzstan',
'Lao People"s Democratic Republic' => 'Lao People"s Democratic Republic',
'Latvia' => 'Latvia',
'Lebanon' => 'Lebanon',
'Lesotho' => 'Lesotho',
'Liberia' => 'Liberia',
'Libyan Arab Jamahiriya' => 'Libyan Arab Jamahiriya',
'Liechtenstein'=> 'Liechtenstein',
'Lithuania' => 'Lithuania',
'Luxembourg' => 'Luxembourg',
'Macao' => 'Macao',
'Macedonia, The Former Yugoslav Republic of' => 'Macedonia, The Former Yugoslav Republic of',
'Madagascar'=> 'Madagascar',
'Malawi' => 'Malawi',
'Malaysia' => 'Malaysia',
'Maldives' => 'Maldives',
'Mali' => 'Mali',
'Malta' => 'Malta',
'Marshall Islands' => 'Marshall Islands',
'Martinique' => 'Martinique',
'Mauritania' => 'Mauritania',
'Mauritius'=> 'Mauritius',
'Mayotte' => 'Mayotte',
'Mexico' => 'Mexico',
'Micronesia, Federated States of' => 'Micronesia, Federated States of',
'Moldova, Republic of' => 'Moldova, Republic of',
'Monaco' => 'Monaco',
'Mongolia' => 'Mongolia',
'Montenegro' => 'Montenegro',
'Montserrat' => 'Montserrat',
'Morocco' => 'Morocco',
'Mozambique' => 'Mozambique',
'Myanmar' => 'Myanmar',
'Namibia'=> 'Namibia',
'Nauru' => 'Nauru',
'Nepal' => 'Nepal',
'Netherlands'=> 'Netherlands',
'Netherlands Antilles' => 'Netherlands Antilles',
'New Caledonia' => 'New Caledonia',
'New Zealand' => 'New Zealand',
'Nicaragua' => 'Nicaragua',
'Niger' => 'Niger',
'Nigeria' => 'Nigeria',
'Niue' => 'Niue',
'Norfolk Island' => 'Norfolk Island',
'Northern Mariana Islands' => 'Northern Mariana Islands',
'Norway' => 'Norway',
'Oman' => 'Oman',
'Pakistan' => 'Pakistan',
'Palau'=> 'Palau',
'Palestinian Territory, Occupied' => 'Palestinian Territory, Occupied',
'Panama' => 'Panama',
'Papua New Guinea' => 'Papua New Guinea',
'Paraguay' => 'Paraguay',
'Peru' => 'Peru',
'Philippines' => 'Philippines',
'Pitcairn' => 'Pitcairn',
'Poland' => 'Poland',
'Portugal' => 'Portugal',
'Puerto Rico' => 'Puerto Rico',
'Qatar' => 'Qatar',
'Reunion' => 'Reunion',
'Romania' => 'Romania',
'Russian Federation' => 'Russian Federation',
'Rwanda' => 'Rwanda',
'Saint Helena'=> 'Saint Helena',
'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
'Saint Lucia' => 'Saint Lucia',
'Saint Pierre and Miquelon' => 'Saint Pierre and Miquelon',
'Saint Vincent and The Grenadines'=> 'Saint Vincent and The Grenadines',
'Samoa' => 'Samoa',
'San Marino' => 'San Marino',
'Sao Tome and Principe' => 'Sao Tome and Principe',
'Saudi Arabia' => 'Saudi Arabia',
'Senegal' => 'Senegal',
'Serbia' => 'Serbia',
'Seychelles' => 'Seychelles',
'Sierra Leone' => 'Sierra Leone',
'Singapore'=> 'Singapore',
'Slovakia' => 'Slovakia',
'Slovenia' => 'Slovenia',
'Solomon Islands' => 'Solomon Islands',
'Somalia' => 'Somalia',
'South Africa'=> 'South Africa',
'South Georgia and The South Sandwich Islands' => 'South Georgia and The South Sandwich Islands',
'Spain' => 'Spain',
'Sri Lanka' => 'Sri Lanka',
'Sudan' => 'Sudan',
'Suriname' => 'Suriname',
'Svalbard and Jan Mayen' => 'Svalbard and Jan Mayen',
'Swaziland' => 'Swaziland',
'Sweden' => 'Sweden',
'Switzerland' => 'Switzerland',
'Syrian Arab Republic' => 'Syrian Arab Republic',
'Taiwan, Province of China' => 'Taiwan, Province of China',
'Tajikistan' => 'Tajikistan',
'Tanzania, United Republic of' => 'Tanzania, United Republic of',
'Thailand' => 'Thailand',
'Timor-leste' => 'Timor-leste',
'Togo' => 'Togo',
'Tokelau' => 'Tokelau',
'Tonga' => 'Tonga',
'Trinidad and Tobago' => 'Trinidad and Tobago',
'Tunisia' => 'Tunisia',
'Turkey' => 'Turkey',
'Turkmenistan' => 'Turkmenistan',
'Turks and Caicos Islands' => 'Turks and Caicos Islands',
'Tuvalu' => 'Tuvalu',
'Uganda' => 'Uganda',
'Ukraine' => 'Ukraine',
'United Arab Emirates' => 'United Arab Emirates',
'United Kingdom' => 'United Kingdom',
'United States' => 'United States',
'United States Minor Outlying Islands' => 'United States Minor Outlying Islands',
'Uruguay' => 'Uruguay',
'Uzbekistan' => 'Uzbekistan',
'Vanuatu' => 'Vanuatu',
'Venezuela' => 'Venezuela',
'Vietnam' => 'Vietnam',
'Virgin Islands, British' => 'Virgin Islands, British',
'Virgin Islands, U.S.' => 'Virgin Islands, U.S.',
'Wallis and Futuna' => 'Wallis and Futuna',
'Western Sahara' => 'Western Sahara',
'Yemen' => 'Yemen',
'Zambia' => 'Zambia',
'Zimbabwe' => 'Zimbabwe'))?>
		<?php echo $form->error($model,'cus_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_zip_code'); ?>
		<?php echo $form->textField($model,'cus_zip_code',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'cus_zip_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->dropDownList($model, 'company_id', CHtml::listData(
		Company::model()->findAll(), 'id', 'company_name'),
		array('empty' => 'Select company name')
		); ?>
		<?php echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->