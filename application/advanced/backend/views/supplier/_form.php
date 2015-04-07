<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Supplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_person')->textInput(['maxlength' => true]) ?>

<fieldset><legend>Address</legend>
    <?= $form->field($model, 'house_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip_code')->textInput() ?>

        <?= $form->field($model, 'country')->dropDownList(
    array('Afghanistan'=>'Afghanistan','Åland Islands'=>'Åland Islands','Albania'=>'Albania','Algeria'=>'Algeria','American Samoa'=>'American Samoa','Andorra'=>'Andorra'
        ,'Angola'=>'Angola','Anguilla'=>'Anguilla','Antarctica'=>'Antarctica','Antigua And Barbuda'=>'Antigua And Barbuda','Argentina'=>'Argentina'
        ,'Armenia'=>'Armenia','Aruba'=>'Aruba','Australia'=>'Australia','Austria'=>'Austria','Azerbaijan'=>'Azerbaijan'
        ,'Bahamass'=>'Bahamas','Bahrain'=>'Bahrain','Bangladesh'=>'Bangladesh','Barbados'=>'Barbados','Belarus'=>'Belarus'
        ,'Belgium'=>'Belgium','Belize'=>'Belize','Benin'=>'Benin','Bermuda'=>'Bermuda','Bhutan'=>'Bhutan'
        ,'Bolivia'=>'Bolivia','Bosnia And Herzegovina'=>'Bosnia And Herzegovina','Botswana'=>'Botswana','Bouvet Island'=>'Bouvet Island','Brazil'=>'Brazil'
        ,'British Indian Ocean Territory'=>'British Indian Ocean Territory','Brunei Darussalam'=>'Brunei Darussalam','Bulgaria'=>'Bulgaria','Burkina Faso'=>'Burkina Faso','Burundi'=>'Burundi'
        ,'Cambodia'=>'Cambodia','Cameroon'=>'Cameroon','Canada'=>'Canada','Cape Verde'=>'Cape Verde','Cayman Islands'=>'Cayman Islands'
        ,'Central African Republic'=>'Central African Republic','Chad'=>'Chad','Chile'=>'Chile','China'=>'China','Christmas Island'=>'Christmas Island'
        ,'Cocos (Keeling) Islands'=>'Cocos (Keeling) Islands','Colombia'=>'Colombia','Comoros'=>'Comoros','Congo'=>'Congo','Cook Islands'=>'Cook Islands'
        ,'Costa Rica'=>'Costa Rica','Cote D`ivoire'=>'Cote D`ivoire','Croatia'=>'Croatia','Cuba'=>'Cuba','Cyprus'=>'Cyprus'
        ,'Czech Republic'=>'Czech Republic','Denmark'=>'Denmark','Djibouti'=>'Djibouti','Dominica'=>'Dominica','Dominican Republic'=>'Dominican Republic'
        ,'Ecuador'=>'Ecuador','Egypt'=>'Egypt','El Salvadors'=>'El Salvador','Equatorial Guinea'=>'Equatorial Guinea','Eritrea'=>'Eritrea'
        ,'Estonia'=>'Estonia','Ethiopia'=>'Ethiopia','Falkland Islands (Malvinas)'=>'Falkland Islands (Malvinas)','Faroe Islands'=>'Faroe Islands','Fiji'=>'Fiji'
        ,'Finland'=>'Finland','France'=>'France','French Guianas'=>'French Guianas','French Polynesia'=>'French Polynesia','French Southern Territories'=>'French Southern Territories'
        ,'Gabonr'=>'Gabon','Gambia'=>'Gambia','Georgia'=>'Georgia','Germany'=>'Germany','Ghana'=>'Ghana'
        ,'Gibraltar'=>'Gibraltar','Greece'=>'Greece','Greenland'=>'Greenland','Grenada'=>'Grenada','Guadeloupe'=>'Guadeloupe'
        ,'Guam'=>'Guam','Guatemala'=>'Guatemala','Guernseys'=>'Guernsey','Guinea'=>'Guinea','Guinea-bissau'=>'Guinea-bissau'
        ,'Guyana'=>'Guyana','Haiti'=>'Haiti','Heard Island And Mcdonald Islands'=>'Heard Island And Mcdonald Islands','Holy See (Vatican City State)'=>'Holy See (Vatican City State)','Honduras'=>'Honduras'
        ,'Hong Kong'=>'Hong Kong','Hungary'=>'Hungary','Iceland'=>'Iceland','India'=>'India','Indonesia'=>'Indonesia'
        ,'Iran'=>'Iran','Iraq'=>'Iraq','Ireland'=>'Ireland','Isle Of Man'=>'Isle Of Man','Israel'=>'Israel'
        ,'Italy'=>'Italy','Jamaica'=>'Jamaica','Japan'=>'Japan', 'Jersey' => 'Jersey', 'Jordan'=>'Jordan','Kazakhstan'=>'Kazakhstan'
        ,'Kenya'=>'Kenya','Kiribati'=>'Kiribati','Korea, North'=>'Korea, North','Korea, South'=>'Korea, South','Kuwait'=>'Kuwait'
        ,'Kyrgyzstan'=>'Kyrgyzstan','Laos'=>'Laos','Latvia'=>'Latvia','Lebanon'=>'Lebanon','Lesotho'=>'Lesotho'
        ,'Liberia'=>'Liberia','Libya'=>'Libya','Liechtenstein'=>'Liechtenstein','Lithuania'=>'Lithuania','Luxembourgt'=>'Luxembourg'
        ,'Macao'=>'Macao','Macedonia'=>'Macedonia','Madagascar'=>'Madagascar','Malawi'=>'Malawi','Malaysia'=>'Malaysia'
        ,'Maldives'=>'Maldives','Mali'=>'Mali','Malta'=>'Malta','Marshall Islands'=>'Marshall Islands','Martinique'=>'Martinique'
        ,'Mauritania'=>'Mauritania','Mauritius'=>'Mauritius','Mayotteh'=>'Mayotte','Mexico'=>'Mexico','Micronesia'=>'Micronesia'
        ,'Moldova'=>'Moldova','Monaco'=>'Monaco','Mongolia'=>'Mongolia','Montenegro'=>'Montenegro','Montserrat'=>'Montserrat'
        ,'Morocco'=>'Morocco','Mozambiquei'=>'Mozambique','Myanmar'=>'Myanmar','Namibia'=>'Namibia','Nauru'=>'Nauru'
        ,'Nepal'=>'Nepal','Netherlands'=>'Netherlands','Netherlands Antilles'=>'Netherlands Antilles','New Caledonia'=>'New Caledonia','New Zealand'=>'New Zealand'
        ,'Nicaragua'=>'Nicaragua','Niger'=>'Niger','Nigeria'=>'Nigeria','Niue'=>'Niue','Norfolk Island'=>'Norfolk Island'
        ,'Northern Mariana Islands'=>'Northern Mariana Islands','Norway'=>'Norway','Oman'=>'Oman','Pakistan'=>'Pakistan','Palau'=>'Palau'
        ,'Panama'=>'Panama','Papua New Guinea'=>'Papua New Guinea','Paragua'=>'Paragua','Peru'=>'Peru','Philippines'=>'Philippines'
        ,'Pitcairn'=>'Pitcairn','Poland'=>'Poland','Portugal'=>'Portugal','Puerto Rico'=>'Puerto Rico','Qatar'=>'Qatar'
        ,'Reunion'=>'Reunion','Romania'=>'Romania','Russia'=>'Russia','Rwanda'=>'Rwanda','Saint Helena'=>'Saint Helena'
        ,'Saint Kitts And Nevis'=>'Saint Kitts And Nevis','Saint Lucia'=>'Saint Lucia','Saint Pierre And Miquelon'=>'Saint Pierre And Miquelon','Saint Vincent And The Grenadines'=>'Saint Vincent And The Grenadines','Samoa'=>'Samoa', 'San Marino'=>'San Marino'
        ,'Saudi Arabia'=>'Saudi Arabia','Senegal'=>'Senegal','Serbia'=>'Serbia','Seychelles'=>'Seychelles'
        ,'Sierra Leone'=>'Sierra Leones','Singapore'=>'Singapore','Slovakia'=>'Slovakia','Slovenia'=>'Slovenia','Solomon Islands'=>'Solomon Islands'
        ,'Somalia'=>'Somalia','South Africa'=>'South Africa','South Georgia And The South Sandwich Islands'=>'South Georgia And The South Sandwich Islands','Spain'=>'Spain','Sri Lanka'=>'Sri Lanka'
        ,'Sudan'=>'Sudan','Suriname'=>'Suriname','Svalbard And Jan Mayen'=>'Svalbard And Jan Mayen','Swaziland'=>'Swaziland','Sweden'=>'Sweden'
        ,'Switzerland'=>'Switzerland','Syrian Arab Republic'=>'Syrian Arab Republic','Taiwan'=>'Taiwan','Tajikistan'=>'Tajikistan','Tanzania'=>'Tanzania'
        ,'Thailand'=>'Thailand','Timor-leste'=>'Timor-leste','Togo'=>'Togo','Tokelau'=>'Tokelau','Tonga'=>'Tonga'
        ,'Trinidad And Tobago'=>'Trinidad And Tobago','Tunisia'=>'Tunisia','Turkey'=>'Turkey','Turkmenistan'=>'Turkmenistan','Turks And Caicos Islands'=>'Turks And Caicos Islands'
        ,'Tuvalu'=>'Tuvalu','Uganda'=>'Uganda','Ukraine'=>'Ukraine','United Arab Emirates'=>'United Arab Emirates','United Kingdom'=>'United Kingdom'
        ,'United States'=>'United States','Uruguay'=>'Uruguay','Uzbekistan'=>'Uzbekistan','Vanuatu'=>'Vanuatu','Venezuela'=>'Venezuela'
        ,'Vietnam'=>'Vietnam','Virgin Islands, British'=>'Virgin Islands, British','Virgin Islands, U.S.'=>'Virgin Islands, U.S.','Wallis And Futuna'=>'Wallis And Futuna','Western Sahara'=>'Western Sahara'
        ,'Yemen'=>'Yemen','Zambia'=>'Zambia','Zimbabwe'=>'Zimbabwe',
        ), 
    ['prompt'=>'Select Country']); ?>
 </fieldset><hr>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <div>
        <?= Html::a('Back to Suppliers', ['supplier/index'], ['class' => 'btn btn-primary', 'accesskey'=>'b']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
