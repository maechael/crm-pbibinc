<?php

namespace Database\Seeders;

use App\Models\Insurer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsurerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['name' => 'AIX Specialty Insurance Company'],
            ['name' => 'Accident Fund Insurance Company'],
            ['name' => 'Allianz Underwriters Insurance Company'],
            ['name' => 'Allstate Insurance Company'],
            ['name' => 'AmGUARD Insurance Company'],
            ['name' => 'AmTrust Insurance Company of KS, Inc.'],
            ['name' => 'AmTrust International Underwriters Limited'],
            ['name' => 'AmTrust North America'],
            ['name' => 'American Automobile Insurance Company'],
            ['name' => 'American Contractors Indemnity Company'],
            ['name' => 'Arch Specialty Insurance Company'],
            ['name' => 'Associated Industries Insurance Company'],
            ['name' => 'Atlantic Specialty Insurance Company'],
            ['name' => 'Benchmark Insurance Group'],
            ['name' => 'Berkshire Hathaway Guard Insurance Company'],
            ['name' => 'Berkshire Hathaway Homes Insurance Company'],
            ['name' => 'Bryant Surety Bonds, Inc.'],
            ['name' => 'Certain Underwriters at Lloyds London'],
            ['name' => 'Cimarron Insurance Company'],
            ['name' => 'Clear Blue Insurance Company'],
            ['name' => 'Commerce & Industry Insurance Company'],
            ['name' => 'Covington Specialty Insurance Company'],
            ['name' => 'Evanston Insurance Company'],
            ['name' => 'Golden Insurance Company, RRG'],
            ['name' => 'Great American Insurance Company'],
            ['name' => 'Guard Insurance Group'],
            ['name' => 'Hiscox Insurance Company Inc.'],
            ['name' => 'Houston Casualty Company'],
            ['name' => 'Hudson Insurance Company'],
            ['name' => 'Indemnity Insurance Company'],
            ['name' => 'Integon Indemnity Corporation'],
            ['name' => 'Interstate Fire & Casualty Company'],
            ['name' => 'Ironshore Specialty Insurance Company'],
            ['name' => 'James River Insurance Company'],
            ['name' => 'Kinsale Insurance Company'],
            ['name' => 'Liberty Mutual Insurance'],
            ['name' => 'Lion Insurance Company'],
            ['name' => 'Mercury Insurance Company'],
            ['name' => 'Mt. Hawley Insurance Company'],
            ['name' => 'NOVA Casualty Company'],
            ['name' => 'National General Insurance Company'],
            ['name' => 'National Liability & Fire Insurance Company'],
            ['name' => 'National Union Fire Insurance Company of Pittsburgh, PA'],
            ['name' => 'Navigators Insurance Company'],
            ['name' => 'NorGUARD Insurance Company'],
            ['name' => 'Nova Casualty Company'],
            ['name' => 'Pennsylvania Manufacturers Assoc Ins Co'],
            ['name' => 'Philadelphia Indemnity Insurance Company'],
            ['name' => 'Preferred Contractors Insurance Company'],
            ['name' => 'Progressive County Mutual Insurance'],
            ['name' => 'Republic-Vanguard Insurance Co'],
            ['name' => 'Risk Specialists Companies'],
            ['name' => 'Rockingham Insurance Company'],
            ['name' => 'SENTINEL INSURANCE COMPANY, LIMITED'],
            ['name' => 'SUNZ Company Insurance'],
            ['name' => 'Scottsdale Insurance Company'],
            ['name' => 'Security National Insurance Company'],
            ['name' => 'Starr Surplus Lines Insurance Company'],
            ['name' => 'Starstone Specialty Insurance Company'],
            ['name' => 'State National Insurance Company Inc.'],
            ['name' => 'Technology Insurance Company'],
            ['name' => 'Texas Mutual Insurance Co'],
            ['name' => 'Travelers Casualty Insurance Company of America'],
            ['name' => 'Trisura Specialty Insurance Company'],
            ['name' => 'U.S. Specialty Insurance Company'],
            ['name' => 'United Financial Casualty Co.'],
            ['name' => 'United Specialty Insurance Company'],
            ['name' => 'United States Fire Insurance Company'],
            ['name' => 'United States Liability Insurance Comp'],
            ['name' => 'United Wisconsin Insurance Company'],
            ['name' => 'Utica First Insurance Company'],
            ['name' => 'Wesco Insurance Company'],
            ['name' => 'Western Surety Company'],
            ['name' => 'Zurich Insurance Company'],
            ['name' => 'Clear Spring Property and Casualty'],
            ['name' => 'Contractors Bonding and Insurance Co'],
            ['name' => 'Metropolitan Property and Casualty Insurance Company'],
            ['name' => 'Atrium Risk Management Services'],
            ['name' => 'BlackBoard Insurance Company'],
            ['name' => 'MESA UNDERWRITERS SPECIALTY INSURANCE COMPANY'],
            ['name' => 'Western Surety Company'],
            ['name' => 'Frank Winston Crum Insurance Company'],
            ['name' => 'American Zurich Insurance Company'],
            ['name' => 'Liberty Surplus Insurance Corporation'],
            ['name' => 'Everest National Insurance Company'],
            ['name' => 'Hartford Casualty Insurance Company'],
            ['name' => 'Westchester Surplus Lines Insurance Co.'],
            ['name' => 'State Compensation Insurance Fund'],
            ['name' => 'Century Insurance Group'],
            ['name' => 'Century Surety Company'],
            ['name' => 'Travelers Casualty Insurance Company of America'],
            ['name' => 'Metropolitan Casualty Insurance Company'],
            ['name' => 'Third Coast Insurance Company'],
            ['name' => 'Peleus Insurance Company'],
            ['name' => 'Gemini Insurance Company'],
            ['name' => 'Continental Casualty Company'],
            ['name' => 'The Gray Casualty & Surety Company'],
            ['name' => 'Allied World Surplus Lines Insurance Company'],
            ['name' => 'Milford Casualty Insurance Company'],
            ['name' => 'United National Insurance Company'],
            ['name' => 'Hartford Insurance Company of the Midwest'],
            ['name' => 'Sirius America Insurance Company'],
            ['name' => 'NEXT INSURANCE US COMPANY'],
            ['name' => 'National Specialty Insurance Company'],
            ['name' => 'SouthEast Personnel Leasing Inc.'],
            ['name' => 'Ohio Security Insurance Company'],
            ['name' => 'Northfield Insurance Company'],
            ['name' => 'Crum & Forster Specialty Insurance Company'],
            ['name' => 'ACE Property and Casualty Insurance Company'],
            ['name' => 'Infinity County Mutual Insurance Company'],
            ['name' => 'Rockingham Specialty, Inc'],
            ['name' => 'Hartford Fire Insurance Company'],
            ['name' => 'Illinois Union Insurance Company'],
            ['name' => 'Rockingham Casualty Company'],
            ['name' => 'Infinity Auto Insurance Company'],
            ['name' => 'Spinnaker Insurance Company'],
            ['name' => 'PENN-STAR INSURANCE COMPANY'],
            ['name' => 'Integon Preferred Insurance Company'],
            ['name' => 'Benchmark Insurance Company'],
            ['name' => 'biBERK Business Insurance'],
            ['name' => 'OBSIDIAN SPECIALTY INSURANCE COMPANY'],
            ['name' => 'Admiral Insurance Company'],
            ['name' => 'The North River Insurance Company'],
            ['name' => 'Old Republic Surety Company'],
            ['name' => 'Sutton National Insurance Company'],
            ['name' => 'Nationwide Mutual Insurance Company'],
            ['name' => 'Underwriters at Lloydâ€™s, London'],
            ['name' => 'Concert Specialty Insurance Company'],
            ['name' => 'Knight Specialty Insurance Company'],
            ['name' => 'Merchants Bonding Company (Mutual)'],
            ['name' => 'American Builders Insurance Company RRG, Inc.'],
            ['name' => 'Endurance American Specialty Insurance Company'],
            ['name' => 'Burlington Insurance Company'],
            ['name' => 'STARSTONE NATIONAL INSURANCE COMPANY'],
            ['name' => 'Accident Fund General Insurance Company'],
            ['name' => 'Hamilton Select Insurance Inc'],
            ['name' => 'Nautilus Insurance Company'],
            ['name' => 'Wellfleet New York Insurance Company'],
            ['name' => 'Topa Insurance Company'],
            ['name' => 'AIG Specialty Insurance Company'],
            ['name' => 'Western World Insurance Company'],
            ['name' => 'Berkshire Hathaway Direct Insurance Company'],
            ['name' => 'Progressive Northern Insurance Co'],
            ['name' => 'TEXAS BONDING COMPANY'],
            ['name' => 'CCI Surety'],
            ['name' => 'Arch Insurance Company'],
            ['name' => 'Sutton Specialty Insurance Company'],
            ['name' => 'Great American Alliance Insurance Company'],
            ['name' => 'Infinity Select Insurance Company'],
            ['name' => 'Colony Insurance Company'],
            ['name' => 'Clear Blue Specialty Insurance Company'],
            ['name' => 'SolePro'],
            ['name' => 'INTEGON NATIONAL INSURANCE COMPANY'],
            ['name' => 'Gotham Insurance Company'],
            ['name' => 'Ategrity Specialty Insurance Company'],
            ['name' => 'StarStone National Insurance Company'],
            ['name' => 'The Pie Insurance Company'],
            ['name' => 'Richmond National Insurance Company'],
            ['name' => 'Travelers Casualty and Surety Company of America'],
            ['name' => 'Benchmark Specialty Insurance Company'],
            ['name' => 'SCOTTSDALE SURPLUS LINES INSURANCE COMPANY'],
            ['name' => 'AmTrust Insurance Company'],
            ['name' => 'Markel American Insurance Company'],
            ['name' => 'Employers Preferred Insurance Company'],
            ['name' => 'SiriusPoint America Insurance Company'],
            ['name' => 'Wellfleet Insurance Company'],
            ['name' => 'Verus Specialty Insurance'],
            ['name' => 'Scottsdale Indemnity Company'],
            ['name' => 'Pinnacol Assurance']
        ];
        Insurer::insert($data);
    }
}