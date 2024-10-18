<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Set_views
{
    // HOME
    public function Home() {
        return 'Home/Home';
    }
    
    // ABOUT US
    public function Library_Commitee() {
        return 'About_Us/Library_Commitee';
    }

    public function Open_Hours() {
        return 'About_Us/Open_Hours';
    }

    public function Vision_Mission_and_Objectives() {
        return 'About_Us/Vision_Mission_and_Objectives';
    }

    // LIBRARY SERVIES
    public function Turnitin() {
        return 'Library_Services/Turnitin';
    }

    public function Printing_Service() {
        return 'Library_Services/Printing_Service';
    }

    public function Borrowing_and_Returning() {
        return 'Library_Services/Borrowing_and_Returning';
    }
    
    public function Referrals() {
        return 'Library_Services/Referrals';
    }

    public function Library_Orientation() {
        return 'Library_Services/Library_Orientation';
    }

    public function Ask_Dora() {
        return 'Library_Services/Ask_Dora';
    }

    // POLICIES & GUIDELINES
    public function Conduct_of_Library_Users() {
        return 'Policies_and_Guidelines/Conduct_of_Library_Users';
    }

    public function Borrowing_Rules() {
        return 'Policies_and_Guidelines/Borrowing_Rules';
    }

    // ONLINE RESOURCES
    public function Faculty_Research_Journal() {
        return 'Online_Resources/Faculty_Research_Journal';
    }

    // LIBRARY SECTIONS
    public function Collaborative_Room() {
        return 'Library_Sections/Collborative_Room';
    }

    public function Discussion_Room() {
        return 'Library_Sections/Discussion_Room';
    }

    public function Theses_Section() {
        return 'Library_Sections/Theses_Section';
    }

    public function Reading_Area() {
        return 'Library_Sections/Reading_Area';
    }

    public function Computer_Section() {
        return 'Library_Sections/Computer_Section';
    }

    public function Book_Therapy_Corner() {
        return 'Library_Sections/Book_Therapy_Corner';
    }

    public function Periodicals() {
            return 'Library_Sections/Periodicals';
    }
}