

@include('avored-ecommerce::forms.text',['name' => 'name','label' => __('avored-promotion::promotion.name')])

@include('avored-ecommerce::forms.textarea',['name' => 'description','label' => __('avored-promotion::promotion.description')])


@include('avored-ecommerce::forms.select',['name' => 'discount_type',
                                        'label' => __('avored-promotion::promotion.discount_type'),
                                        'options' => ['PERCENTAGE' => "Percentage","FIXED" => "Fixed Amount"]])

@include('avored-ecommerce::forms.text',['name' => 'amount','label' => __('avored-promotion::promotion.amount')])