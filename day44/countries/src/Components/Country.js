

function Country(props) {

  return (
    <div className="Country">
      <img src={props.image} alt={props.name} />
     <h2>{props.name}</h2>
    </div>
  );
}

export default Country;
