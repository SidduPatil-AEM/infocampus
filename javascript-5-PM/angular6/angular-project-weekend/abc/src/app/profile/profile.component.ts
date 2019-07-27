import { Component, OnInit } from '@angular/core';
import {HttpClient} from '@angular/common/http';
@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {

  constructor(private obj:HttpClient) { }

  ngOnInit() {
    this.getprofile();
  }

  profiledata:any[];
  getprofile()
  {
     var jsondata = {"id":localStorage.getItem("tokenno")};
     var url = "https://jobswalkin.com/web/profile.php";
     this.obj.post(url, jsondata).subscribe(
       response=>{
          this.profiledata = response as string[];
       });
  }

}
