<?php

namespace App\Repository;

use App\Models\Company;

class CompanyRepositories
{
    public function company_data(){

            $data = [];
            $companies = Company::select('id','name')->orderby('name','asc')->get();

            foreach ($companies as $company){
                $data[$company->id] = $company->name."(".$company->contacts()->count().")";
            }

            return $data;

    }

}
