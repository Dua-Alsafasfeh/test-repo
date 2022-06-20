import React, { Component } from 'react';
class NewComp extends Component {
    constructor(props) {
        super(props)
        this.state = {
            message: "Subscribe to Aqaba Cohort",
            sub:"Subscribe"
        };
    }
    buttonChange =()=>{
        this.setState({
            message: "Welcom to Aaqba Cohort",
            sub:"Subscribed"
        })
    }
     render() {
        return(
        <div className='App'>
            <h3>{this.state.message}
            </h3>
         <button onClick={this.buttonChange}>{this.state.sub}</button>
               </div>
               );
    }
}

export default NewComp;