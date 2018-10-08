<?php
/**
 *
 * @Author: Jordan Wamser <jwamser@redpandacoding.com>
 * @CreateAt: 10/8/18 7:52 AM
 */

namespace RedPandaCoding;


class UsStates
{

    public function getAll()
    {
        return array_merge_recursive(
            $this->getStates(),
            $this->getTerritories()
        );
    }

    public function getStates()
    {
        return [
            ['name' => 'Alabama', 'abbrev' => 'AL'],
            ['name' => 'Alaska', 'abbrev' => 'AK'],
            ['name' => 'Arizona', 'abbrev' => 'AZ'],
            ['name' => 'Arkansas', 'abbrev' => 'AR'],
            ['name' => 'California', 'abbrev' => 'CA'],
            ['name' => 'Colorado', 'abbrev' => 'CO'],
            ['name' => 'Connecticut', 'abbrev' => 'CT'],
            ['name' => 'Delaware', 'abbrev' => 'DE'],
            ['name' => 'Florida', 'abbrev' => 'FL'],
            ['name' => 'Georgia', 'abbrev' => 'GA'],
            ['name' => 'Hawaii', 'abbrev' => 'HI'],
            ['name' => 'Idaho', 'abbrev' => 'ID'],
            ['name' => 'Illinois', 'abbrev' => 'IL'],
            ['name' => 'Indiana', 'abbrev' => 'IN'],
            ['name' => 'Iowa', 'abbrev' => 'IA'],
            ['name' => 'Kansas', 'abbrev' => 'KS'],
            ['name' => 'Kentucky', 'abbrev' => 'KY'],
            ['name' => 'Louisiana', 'abbrev' => 'LA'],
            ['name' => 'Maine', 'abbrev' => 'ME'],
            ['name' => 'Maryland', 'abbrev' => 'MD'],
            ['name' => 'Massachusetts', 'abbrev' => 'MA'],
            ['name' => 'Michigan', 'abbrev' => 'MI'],
            ['name' => 'Minnesota', 'abbrev' => 'MN'],
            ['name' => 'Mississippi', 'abbrev' => 'MS'],
            ['name' => 'Missouri', 'abbrev' => 'MO'],
            ['name' => 'Montana', 'abbrev' => 'MT'],
            ['name' => 'Nebraska', 'abbrev' => 'NE'],
            ['name' => 'Nevada', 'abbrev' => 'NV'],
            ['name' => 'New Hampshire', 'abbrev' => 'NH'],
            ['name' => 'New Jersey', 'abbrev' => 'NJ'],
            ['name' => 'New Mexico', 'abbrev' => 'NM'],
            ['name' => 'New York', 'abbrev' => 'NY'],
            ['name' => 'North Carolina', 'abbrev' => 'NC'],
            ['name' => 'North Dakota', 'abbrev' => 'ND'],
            ['name' => 'Ohio', 'abbrev' => 'OH'],
            ['name' => 'Oklahoma', 'abbrev' => 'OK'],
            ['name' => 'Oregon', 'abbrev' => 'OR'],
            ['name' => 'Pennsylvania', 'abbrev' => 'PA'],
            ['name' => 'Rhode Island', 'abbrev' => 'RI'],
            ['name' => 'South Carolina', 'abbrev' => 'SC'],
            ['name' => 'South Dakota', 'abbrev' => 'SD'],
            ['name' => 'Tennessee', 'abbrev' => 'TN'],
            ['name' => 'Texas', 'abbrev' => 'TX'],
            ['name' => 'Utah', 'abbrev' => 'UT'],
            ['name' => 'Vermont', 'abbrev' => 'VT'],
            ['name' => 'Virginia', 'abbrev' => 'VA'],
            ['name' => 'Washington', 'abbrev' => 'WA'],
            ['name' => 'West Virginia', 'abbrev' => 'WV'],
            ['name' => 'Wisconsin', 'abbrev' => 'WI'],
            ['name' => 'Wyoming', 'abbrev' => 'WY']
        ];
    }

    public function getTerritories()
    {
        return [
            ['name' => 'American Samoa', 'abbrev' => 'AS'],
            ['name'=>'Federated States of Micronesia','abbrev'=>'FM'],
            ['name' => 'Guam', 'abbrev' => 'GU'],
            ['name' => 'Northern Mariana Islands', 'abbrev' => 'MP'],
            ['name'=>'Commonwealth of the Northern MAriana Islands', 'abbrev'=>'MP'],
            ['name'=>'Palau','abbrev'=>'PW'],
            ['name' => 'Puerto Rico', 'abbrev' => 'PR'],
            ['name' => 'U.S. Virgin Islands', 'abbrev' => 'VI'],
            ['name' => 'District Of Columbia', 'abbrev' => "DC"]
        ];
    }
}