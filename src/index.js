import React from "react";
import ReactDOM from "react-dom";
// import Person from "./scripts/Person";
import ExampleReactComponent from "./scripts/ExampleReactComponent";

if (document.querySelector("#render-react-example-here")) {
  ReactDOM.render(
    <ExampleReactComponent />,
    document.querySelector("#render-react-example-here")
  );
}
