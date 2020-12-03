$(function () {
    $(window).on('load', function () {

        $('.add_new_education_row').on('click', function () {
            let row = `
            <tr>
                <td><input type="text" placeholder="" name="from_month_or_year[]"></td>
                <td><input type="text" placeholder="" name="to_month_or_year[]"></td>
                <td><input type="text" placeholder="" name="name_of_institution[]"></td>
                <td><input type="text" placeholder="" name="city_country[]"></td>
                <td><input type="text" placeholder="" name="certificate_degree[]"></td>
                <td style="border-right: 0"></td>
                <td style="border-left: 0"><i class="fa fa-trash border border-success remove_this_education_row add_br_50"></i></td>
            </tr>
        `;
            let parent = $(this).parents('table');
            parent.append(row);
            initRemoveNewEducationRow();
            return false;
        });

        function initRemoveNewEducationRow() {
            $('.remove_this_education_row').on('click', function () {
                $(this).parents('tr').remove();
                initRemoveNewEducationRow();
            })
        }

        function init_employment_skill_row(){
            $('.add_new_employment_row').on('click', function () {
                let row = `
                <tr>
                    <td><input type="text" placeholder="" name="experience_from_month_or_year[]" ></td>
                    <td><input type="text" placeholder="" name="experience_to_month_or_year[]" ></td>
                    <td><input type="text" placeholder="" name="experience_name_of_institution[]" ></td>
                    <td><input type="text" placeholder="" name="experience_city_country[]" ></td>
                    <td><input type="text" placeholder="" name="experience_certificate_degree[]" ></td>
                    <td style="border-right: 0"></td>
                    <td style="border-left: 0"><i class="fa fa-trash border border-success remove_this_education_row add_br_50"></i></td>
                </tr>
            `;
                let parent = $(this).parents('table');
                parent.append(row);
                initRemoveNewEducationRow();
                return false;
            });
        }
        function init_english_skill_row(){
            $('.add_new_english_skill_row').on('click', function () {
                let row = `
                <tr>
                    <td><input type="text" placeholder="" name="english_test_name[]"></td>
                    <td><input type="text" placeholder="" name="english_test_date[]"></td>
                    <td><input type="text" placeholder="" name="english_test_speak[]"></td>
                    <td><input type="text" placeholder="" name="english_test_listen[]"></td>
                    <td><input type="text" placeholder="" name="english_test_read[]"></td>
                    <td><input type="text" placeholder="" name="english_test_write[]"></td>
                    <td style="border-right: 0"></td>
                    <td style="border-left: 0"><i class="fa fa-trash border border-success remove_this_education_row add_br_50"></i></td>
                </tr>
            `;
                let parent = $(this).parents('table');
                parent.append(row);
                initRemoveNewEducationRow();
                return false;
            });
        }

        function init_french_skill_row(){
            $('.add_new_french_skill_row').on('click', function () {
                let row = `
                <tr>
                    <td><input type="text" placeholder="" name="french_test_name[]"></td>
                    <td><input type="text" placeholder="" name="french_test_date[]"></td>
                    <td><input type="text" placeholder="" name="french_test_speak[]"></td>
                    <td><input type="text" placeholder="" name="french_test_listen[]"></td>
                    <td><input type="text" placeholder="" name="french_test_read_write[]"></td>
                    <td style="border-right: 0"></td>
                    <td style="border-left: 0"><i class="fa fa-trash border border-success remove_this_education_row add_br_50"></i></td>
                </tr>
            `;
                let parent = $(this).parents('table');
                parent.append(row);
                initRemoveNewEducationRow();
                return false;
            });
        }

        $('.save_data_for_later_use').on('click', function (e) {
            e.preventDefault();
            // $('.assesment_page').submit();
            let formData = new FormData($('.assesment_page')[0]);
            formData.set('user_set_email', $('.user_set_email').val());
            axios.post(location.origin + '/free-online-assesment-save-for-later', formData)
                .then((response) => {
                    console.log(response);
                    if (response.data.response === 'success') {
                        Toast.fire({
                            icon: 'success',
                            title: 'your data saved successfully.'
                        })
                    }
                    $('.modal').modal('hide');
                })
        })

        // $('.assesment_page').on('submit', function (e) {
        //     e.preventDefault();
        //     let formData = new FormData(this);
        //     formData.set('user_set_email', $('.user_set_email').val());
        //     axios.post(location.origin + '/free-online-assesment-save-for-later', formData)
        //         .then((response) => {
        //             console.log(response);
        //             if (response.data.response === 'success') {
        //                 Toast.fire({
        //                     icon: 'success',
        //                     title: 'your data saved successfully.'
        //                 })
        //             }
        //         })
        // })

        $('.load_data_btn').on('click', function (e) {
            e.preventDefault();
            let email = $('#get_saved_data_email').val();
            let formDAta = new FormData();
            formDAta.set('email', email);
            axios.post('free-online-assesment-get-data', formDAta)
                .then((response) => {
                    if (response.data !== null) {
                        let html = response.data.data.form_data;
                        html = JSON.parse(html);

                        for (const key in html) {
                            if (html.hasOwnProperty(key)) {
                                const element = html[key];
                                $(`input[name=${key}]`).val(element);
                                // console.log(key, element);

                                if(key === 'message'){
                                    $(`#${key}`).val(element);
                                }

                                if(key === 'gender'){
                                    $(`option[value=${element}]`).attr('selected',true);
                                }

                                if(key === 'marital_status'){
                                    $(`option[value=${element}]`).attr('selected',true);
                                }

                                if(key === 'english_speak' || key === 'english_listen' || key === 'english_read' || key === 'english_write'){
                                    $(`#${key}${element}`).attr('checked','true');
                                }

                                if(key === 'french_speak' || key === 'french_listen' || key === 'french_read' || key === 'french_write'){
                                    $(`#${key}${element}`).attr('checked','true');
                                }

                                if (key === "from_month_or_year") {
                                    if (html["from_month_or_year"].length > 0) {
                                        for (let index = 0; index < html["from_month_or_year"].length; index++) {
                                            // const element = html["from_month_or_year"][index];
                                            if(index == 0){
                                                let row = `
                                                    <tr>
                                                        <td><input type="text" placeholder="" value="${html['from_month_or_year'][0]}" name="from_month_or_year[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['to_month_or_year'][0]}" name="to_month_or_year[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['name_of_institution'][0]}" name="name_of_institution[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['city_country'][0]}" name="city_country[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['certificate_degree'][0]}" name="certificate_degree[]" {{$i==0?'required':''}}></td>
                                                        <td style="border-right: 0"></td>
                                                        <td style="border-left: 0"><i class="fa fa-plus border border-success add_new_english_skill_row add_br_50"></i></td>
                                                    </tr>
                                                `;
                                                $('.education_table tbody').html(row);
                                            }else{
                                                let row = `
                                                    <tr>
                                                        <td><input type="text" placeholder="" value="${html['from_month_or_year'][index]}" name="from_month_or_year[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['to_month_or_year'][index]}" name="to_month_or_year[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['name_of_institution'][index]}" name="name_of_institution[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['city_country'][index]}" name="city_country[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['certificate_degree'][index]}" name="certificate_degree[]" {{$i==0?'required':''}}></td>
                                                        <td style="border-right: 0"></td>
                                                        <td style="border-left: 0"><i class="fa fa-trash border border-success remove_this_education_row add_br_50"></i></td>
                                                    </tr>
                                                `;
                                                $('.education_table tbody').append(row);
                                            }
                                        }
                                    }
                                }

                                if (key === "experience_from_month_or_year") {
                                    if (html["experience_from_month_or_year"].length > 0) {
                                        for (let index = 0; index < html["experience_from_month_or_year"].length; index++) {
                                            // const element = html["experience_from_month_or_year"][index];
                                            if(index == 0){
                                                let row = `
                                                    <tr>
                                                        <td><input type="text" placeholder="" value="${html['experience_from_month_or_year'][0]}" name="experience_from_month_or_year[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['experience_to_month_or_year'][0]}" name="experience_to_month_or_year[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['experience_name_of_institution'][0]}" name="experience_name_of_institution[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['experience_city_country'][0]}" name="experience_city_country[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['experience_certificate_degree'][0]}" name="experience_certificate_degree[]" {{$i==0?'required':''}}></td>
                                                        <td style="border-right: 0"></td>
                                                        <td style="border-left: 0"><i class="fa fa-plus border border-success add_new_english_skill_row add_br_50"></i></td>
                                                    </tr>
                                                `;
                                                $('.employment_table tbody').html(row);
                                            }else{
                                                let row = `
                                                    <tr>
                                                        <td><input type="text" placeholder="" value="${html['experience_from_month_or_year'][index]}" name="experience_from_month_or_year[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['experience_to_month_or_year'][index]}" name="experience_to_month_or_year[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['experience_name_of_institution'][index]}" name="experience_name_of_institution[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['experience_city_country'][index]}" name="experience_city_country[]" {{$i==0?'required':''}}></td>
                                                        <td><input type="text" placeholder="" value="${html['experience_certificate_degree'][index]}" name="experience_certificate_degree[]" {{$i==0?'required':''}}></td>
                                                        <td style="border-right: 0"></td>
                                                        <td style="border-left: 0"><i class="fa fa-trash border border-success remove_this_education_row add_br_50"></i></td>
                                                    </tr>
                                                `;
                                                $('.employment_table tbody').append(row);
                                            }
                                        }
                                    }
                                }

                                if (key === "english_test_name") {
                                    if (html["english_test_name"].length > 0) {
                                        for (let index = 0; index < html["english_test_name"].length; index++) {
                                            // const element = html["english_test_name"][index];
                                            if(index == 0){
                                                let row = `
                                                    <tr>
                                                        <td><input type="text" placeholder="" value="${html['english_test_name'][0]}" name="english_test_name[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['english_test_date'][0]}" name="english_test_date[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['english_test_speak'][0]}" name="english_test_speak[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['english_test_listen'][0]}" name="english_test_listen[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['english_test_read'][0]}" name="english_test_read[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['english_test_write'][0]}" name="english_test_write[]"></td>
                                                        <td style="border-right: 0"></td>
                                                        <td style="border-left: 0"><i class="fa fa-plus border border-success add_new_english_skill_row add_br_50"></i></td>
                                                    </tr>
                                                `;
                                                $('.english_test_table tbody').html(row);
                                            }else{
                                                let row = `
                                                    <tr>
                                                        <td><input type="text" placeholder="" value="${html['english_test_name'][index]}" name="english_test_name[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['english_test_date'][index]}" name="english_test_date[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['english_test_speak'][index]}" name="english_test_speak[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['english_test_listen'][index]}" name="english_test_listen[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['english_test_read'][index]}" name="english_test_read[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['english_test_write'][index]}" name="english_test_write[]"></td>
                                                        <td style="border-right: 0"></td>
                                                        <td style="border-left: 0"><i class="fa fa-trash border border-success remove_this_education_row add_br_50"></i></td>
                                                    </tr>
                                                `;
                                                $('.english_test_table tbody').append(row);
                                            }
                                        }
                                    }
                                }

                                if (key === "french_test_name") {
                                    if (html["french_test_name"].length > 0) {
                                        for (let index = 0; index < html["french_test_name"].length; index++) {
                                            // const element = html["french_test_name"][index];
                                            if(index == 0){
                                                let row = `
                                                    <tr>
                                                        <td><input type="text" placeholder="" value="${html['french_test_name'][0]}" name="french_test_name[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['french_test_date'][0]}" name="french_test_date[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['french_test_speak'][0]}" name="french_test_speak[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['french_test_listen'][0]}" name="french_test_listen[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['french_test_read'][0]}" name="french_test_read[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['french_test_write'][0]}" name="french_test_write[]"></td>
                                                        <td style="border-right: 0"></td>
                                                        <td style="border-left: 0"><i class="fa fa-plus border border-success add_new_french_skill_row add_br_50"></i></td>
                                                    </tr>
                                                `;
                                                $('.french_test_table tbody').html(row);
                                            }else{
                                                let row = `
                                                    <tr>
                                                        <td><input type="text" placeholder="" value="${html['french_test_name'][index]}" name="french_test_name[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['french_test_date'][index]}" name="french_test_date[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['french_test_speak'][index]}" name="french_test_speak[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['french_test_listen'][index]}" name="french_test_listen[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['french_test_read'][index]}" name="french_test_read[]"></td>
                                                        <td><input type="text" placeholder="" value="${html['french_test_write'][index]}" name="french_test_write[]"></td>
                                                        <td style="border-right: 0"></td>
                                                        <td style="border-left: 0"><i class="fa fa-trash border border-success remove_this_education_row add_br_50"></i></td>
                                                    </tr>
                                                `;
                                                $('.french_test_table tbody').append(row);
                                            }
                                        }
                                    }
                                }

                                if (key === "question_0") {
                                    $('#' + key).val(element[0]);
                                    if (element[1] === 'yes') {
                                        $('#' + key + '_yes').attr('checked', 'true');
                                    } else {
                                        $('#' + key + '_no').attr('checked', 'true');
                                    }
                                }
                                if (key === "question_1") {
                                    $('#' + key).val(element[0]);
                                    if (element[1] === 'yes') {
                                        $('#' + key + '_yes').attr('checked', 'true');
                                    } else {
                                        $('#' + key + '_no').attr('checked', 'true');
                                    }
                                }
                                if (key === "question_2") {
                                    $('#' + key).val(element[0]);
                                    if (element[1] === 'yes') {
                                        $('#' + key + '_yes').attr('checked', 'true');
                                    } else {
                                        $('#' + key + '_no').attr('checked', 'true');
                                    }
                                }
                                if (key === "question_3") {
                                    $('#' + key).val(element[0]);
                                    if (element[1] === 'yes') {
                                        $('#' + key + '_yes').attr('checked', 'true');
                                    } else {
                                        $('#' + key + '_no').attr('checked', 'true');
                                    }
                                }
                                if (key === "question_4") {
                                    $('#' + key).val(element[0]);
                                    if (element[1] === 'yes') {
                                        $('#' + key + '_yes').attr('checked', 'true');
                                    } else {
                                        $('#' + key + '_no').attr('checked', 'true');
                                    }
                                }
                                if (key === "question_5") {
                                    $('#' + key).val(element[0]);
                                    if (element[1] === 'yes') {
                                        $('#' + key + '_yes').attr('checked', 'true');
                                    } else {
                                        $('#' + key + '_no').attr('checked', 'true');
                                    }
                                }
                                if (key === "question_6") {
                                    $('#' + key).val(element[0]);
                                    if (element[1] === 'yes') {
                                        $('#' + key + '_yes').attr('checked', 'true');
                                    } else {
                                        $('#' + key + '_no').attr('checked', 'true');
                                    }
                                }
                                if (key === "question_7") {
                                    $('#' + key).val(element[0]);
                                    if (element[1] === 'yes') {
                                        $('#' + key + '_yes').attr('checked', 'true');
                                    } else {
                                        $('#' + key + '_no').attr('checked', 'true');
                                    }
                                }
                                if (key === "question_8") {
                                    $('#' + key).val(element[0]);
                                    if (element[1] === 'yes') {
                                        $('#' + key + '_yes').attr('checked', 'true');
                                    } else {
                                        $('#' + key + '_no').attr('checked', 'true');
                                    }
                                }
                                if (key === "question_9") {
                                    $('#' + key).val(element[0]);
                                    if (element[1] === 'yes') {
                                        $('#' + key + '_yes').attr('checked', 'true');
                                    } else {
                                        $('#' + key + '_no').attr('checked', 'true');
                                    }
                                }
                            }
                        }
                        // console.log(html);
                        // $('.assesment_page .datas')[0].innerHTML = html;
                    }
                    $('.modal').modal('hide');
                    initRemoveNewEducationRow();
                    init_employment_skill_row();
                    init_french_skill_row();
                    init_english_skill_row();
                })

        })

        initRemoveNewEducationRow();
        init_employment_skill_row();
        init_french_skill_row();
        init_english_skill_row();

        $('.assesment_form_submit').on('click',function(){
            // $('.assesment_page').submit();
            axios.post(location.origin+"/contact-message-submit")
                .then((response)=>{
                    if (response.data.response === 'success') {
                        Toast.fire({
                            icon: 'success',
                            title: 'your data saved successfully.'
                        })
                    }
                })
        })
    })



    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

})
