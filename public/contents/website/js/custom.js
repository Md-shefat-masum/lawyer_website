$(function(){
    $('.add_new_education_row').on('click',function(){
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
    function initRemoveNewEducationRow(){
        $('.remove_this_education_row').on('click',function(){
            $(this).parents('tr').remove();
            initRemoveNewEducationRow();
        })
    }
    initRemoveNewEducationRow();

    $('.add_new_employment_row').on('click',function(){
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

    $('.add_new_english_skill_row').on('click',function(){
        let row = `
            <tr>
                <td><input type="text" placeholder="" name="english_test_name[]"></td>
                <td><input type="text" placeholder="" name="english_test_date[]"></td>
                <td><input type="text" placeholder="" name="english_test_speak[]"></td>
                <td><input type="text" placeholder="" name="english_test_listen[]"></td>
                <td><input type="text" placeholder="" name="english_test_read_write[]"></td>
                <td style="border-right: 0"></td>
                <td style="border-left: 0"><i class="fa fa-trash border border-success remove_this_education_row add_br_50"></i></td>
            </tr>
        `;
        let parent = $(this).parents('table');
        parent.append(row);
        initRemoveNewEducationRow();
        return false;
    });

    $('.add_new_french_skill_row').on('click',function(){
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
})
